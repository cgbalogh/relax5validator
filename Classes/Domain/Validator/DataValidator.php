<?php
namespace CGB\Relax5validator\Domain\Validator;

class DataValidator extends \TYPO3\CMS\Extbase\Validation\Validator\AbstractValidator {
    
    /**
     * validatorRepository
     *
     * @var \CGB\Relax5validator\Domain\Repository\ValidatorRepository
     * @inject
     */
    protected $validatorRepository = null;
    
    
    /**
     *
     * @var array 
     */
    protected $supportedOptions = [
        'context' => ['' => 'Context of the generic validator'],
    ];
    
    /**
     *
     * @var boolean 
     */
    protected $isValidated;
    
    /**
     * 
     * @param array $data
     * @return boolean
     */
    public function isValid($data) {
        // validate here
        $validatorsFromDb = $this->validatorRepository->findByContext($data['__context']);
        $this->isValidated = true;
        
        foreach ($validatorsFromDb as $validatorToBeExecuted) {
            foreach ($validatorToBeExecuted->getConditiongroups() as $conditiongroupRelation) {
                $this->isValidated = $this->isValidated & 
                    $this->genericValidate($data, $conditiongroupRelation->getConditiongroup(), $validatorToBeExecuted->getDebug());
            }
        }
        
        return $this->isValidated;
    }
    
    
    /**
     * 
     * @param array $data
     * @param bool $debug
     */
    private function genericValidate($data, $conditiongroup, $debug = false) {
        if (is_null($conditiongroup)) {
            return true;
        }

        /// $propertyName = $propertyToBeChecked->getProperty();
        // $propertyValue = $object->_getProperty($propertyToBeChecked->getProperty());
        $isDisjunctive = $conditiongroup->getDisjunctive();
        $isValidated = ! $isDisjunctive;
        $errorMessages = [];
        $errorList = [];

        // $disjunctive = $propertyToBeChecked->getDisjunctive();
        foreach ($conditiongroup->getConditions() as $condition) {
            $propertyPath = $propertyName = $condition->getName();
            $propertyName = $condition->getName();
            // $propertyValue = \TYPO3\CMS\Extbase\Reflection\ObjectAccess::getPropertyPath($object, $propertyPath);
            $propertyIndex = preg_match("/\[([^\]]*)\]/", $propertyName, $matches);
            $propertyValue = $data[$matches[1]];
            
            if (! isset($data[$matches[1]])) {
                $conditionMatches = true; 
            } else {
                switch ($condition->getOperator()) {
                    case 'not empty':
                        $conditionMatches = self::notEmpty($propertyValue);
                        break;

                    case 'empty':
                        $conditionMatches = ! self::notEmpty($propertyValue);
                        break;
                    
                    case 'equals':
                        $conditionMatches = ( (string) $condition->getValue() == (string) $propertyValue);
                        break;

                    case 'less than':
                        $conditionMatches = ( (string) $condition->getValue() < $propertyValue);
                        break;
                    
                    case 'less than or equal':
                        $conditionMatches = ( (string) $condition->getValue() <= $propertyValue);
                        break;
                    
                    case 'gretare than':
                        $conditionMatches = ( (string) $condition->getValue() > $propertyValue);
                        break;
                    
                    case 'greater than or equal':
                        $conditionMatches = ( (string) $condition->getValue() >= $propertyValue);
                        break;
                    
                    default:
                        $conditionMatches = true;
                }
            }
            
            if ($isDisjunctive) {
                $isValidated |= $conditionMatches;
            } else {
                $isValidated &= $conditionMatches;
            }

            if (! $conditionMatches) {
                if (! $condition->getSingleErrorMessage()) {
                    $errorId = '§§ ' . $conditiongroup->getUid();
                    if ($conditiongroup->getSingleErrorMessage()) {
                        $errorMessage = $conditiongroup->getSingleErrorMessage()->getText();
                    } else {
                        $errorMessage = 'Error in ' . $conditiongroup->getTitle() . ' for ' . $propertyName;
                    }
                } else {
                    $errorId = '§ ' . $condition->getUid();
                    $errorMessage = $condition->getSingleErrorMessage()->getText();
                }
                $errorList[$errorId]['props'][] = $mapErrorToProperty ? $mapErrorToProperty : $propertyName;
                $errorList[$errorId]['error'] = new \TYPO3\CMS\Extbase\Error\Error($errorMessage, $errorId);
            }
            
            if ($isValidated) {
                // if disjunctive remove error from list
                unset ($errorList[$errorId]);
            }
            
            if ($debug) {
                echo ""
                    . "PropertyPath: $propertyPath <br />"
                    . "PropertyName: $propertyName <br />"
                    . "PropertyValue: $propertyValue <br />"
                    . "MapErrorToProperty: $mapErrorToProperty <br />"
                    . "ErrorId: $errorId <br />"
                    . "IsValidated: $isValidated <br />"
                    . "IsDisjunctive: $isDisjunctive <br />"
                    . "ErrorMessage: $errorMessage <br />";
            }
        }
        // var_dump($errorList);
        // add errors to error/result object

        foreach ($errorList as $errorId => $error) {
            $result = new \TYPO3\CMS\Extbase\Error\Result();
            $result->addError($error['error']);
            for ($i = 0; $i < count($error['props']); $i++) {
                if ($i == 0) {
                    $this->result->forProperty($error['props'][$i])->merge($result);
                } else {
                    $this->result->forProperty($error['props'][$i])->addError(new \TYPO3\CMS\Extbase\Error\Error('', false));
                }
            }
            
        }
        return $isValidated;
    }
    
    /**
     * 
     * @param mixed $value
     */
    static function notEmpty($value) {
        if ($value === null) {
            return false;
        }
        if ($value == '') {
            return false;
        }
        if (is_numeric($value) && ($value == 0)) {
            return false;
        }
        if (is_array($value) && empty($value)) {
            return false;
        }
        if (is_object($value) && $value instanceof \Countable && $value->count() === 0) {
            return false;
        }
        return true;
    }

    /**
     * 
     * @param string $context
     */
    static function getRequiredProperties ($context) {
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository = $objectManager->get(\CGB\Relax5validator\Domain\Repository\ValidatorRepository::class);
        
        $requiredPropertyList = [];
        
        $validatorsFromDb = $repository->findByContext($context);
        foreach ($validatorsFromDb as $validatorToBeExecuted) {
            foreach ($validatorToBeExecuted->getConditiongroups() as $conditiongroupRelation) {
                foreach ($conditiongroupRelation->getConditiongroup()->getConditions() as $conditionToBeExecuted) {
                    if ($conditionToBeExecuted) {
                        $requiredPropertyList[$conditionToBeExecuted->getPropertyWithReferences()] = true;
                    }
                }
            }
        }
        return $requiredPropertyList;
    }
    
    /**
     * 
     * @param string $context
     * @param string $property
     * @return type
     */
    static function isPropertyRequired($context, $property) {
        $requiredProperties = self::getRequiredProperties($context);
        return $requiredProperties[$property] | $requiredProperties[$property . '.uid'];
    }

    /**
     * 
     * @param string $context
     */
    static function getRequiredNames ($context) {
        $objectManager = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\Object\\ObjectManager');
        $repository = $objectManager->get(\CGB\Relax5validator\Domain\Repository\ValidatorRepository::class);
        
        $requiredNamesList = [];

        $validatorsFromDb = $repository->findByContext($context);
        foreach ($validatorsFromDb as $validatorToBeExecuted) {
            foreach ($validatorToBeExecuted->getConditiongroups() as $conditiongroupRelation) {
                foreach ($conditiongroupRelation->getConditiongroup()->getConditions() as $conditionToBeExecuted) {
                    if ($conditionToBeExecuted) {
                        $requiredNamesList[$condition->getName()] = true;
                    }
                }
            }
        }
        return $requiredNamesList;
    }
    
    /**
     * 
     * @param string $context
     * @param string $name
     * @return type
     */
    static function isNameRequired($context, $name) {
        $requiredNames = self::getRequiredNames($context);
        return $requiredNames[$name];
    }
    
}
