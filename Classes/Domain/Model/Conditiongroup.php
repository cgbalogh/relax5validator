<?php
namespace CGB\Relax5validator\Domain\Model;

/***
 *
 * This file is part of the "relax5validator" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017
 *
 ***/

/**
 * Property
 */
class Conditiongroup extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * disjunctive
     *
     * @var bool
     */
    protected $disjunctive = false;

    /**
     * Validators
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Validator>
     */
    protected $validators = null;

    /**
     * Conditions
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Condition>
     * @cascade remove
     */
    protected $conditions = null;

    /**
     * Error Message
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\ConditiongroupToErrorMessageRelation>
     */
    protected $errorMessage = null;

    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->validators = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->conditions = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->errorMessage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Condition
     *
     * @param \CGB\Relax5validator\Domain\Model\Condition $condition
     * @return void
     */
    public function addCondition(\CGB\Relax5validator\Domain\Model\Condition $condition)
    {
        $this->conditions->attach($condition);
    }

    /**
     * Removes a Condition
     *
     * @param \CGB\Relax5validator\Domain\Model\Condition $conditionToRemove The Condition to be removed
     * @return void
     */
    public function removeCondition(\CGB\Relax5validator\Domain\Model\Condition $conditionToRemove)
    {
        $this->conditions->detach($conditionToRemove);
    }

    /**
     * Returns the conditions
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Condition> $conditions
     */
    public function getConditions()
    {
        return $this->conditions;
    }

    /**
     * Sets the conditions
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Condition> $conditions
     * @return void
     */
    public function setConditions(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $conditions)
    {
        $this->conditions = $conditions;
    }

    /**
     * Returns the disjunctive
     *
     * @return bool $disjunctive
     */
    public function getDisjunctive()
    {
        return $this->disjunctive;
    }

    /**
     * Sets the disjunctive
     *
     * @param bool $disjunctive
     * @return void
     */
    public function setDisjunctive($disjunctive)
    {
        $this->disjunctive = $disjunctive;
    }

    /**
     * Returns the boolean state of disjunctive
     *
     * @return bool
     */
    public function isDisjunctive()
    {
        return $this->disjunctive;
    }

    /**
     * Returns the title
     *
     * @return string title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Adds a Validator
     *
     * @param \CGB\Relax5validator\Domain\Model\Validator $validator
     * @return void
     */
    public function addValidator(\CGB\Relax5validator\Domain\Model\Validator $validator)
    {
        $this->validators->attach($validator);
    }

    /**
     * Removes a Validator
     *
     * @param \CGB\Relax5validator\Domain\Model\Validator $validatorToRemove The Validator to be removed
     * @return void
     */
    public function removeValidator(\CGB\Relax5validator\Domain\Model\Validator $validatorToRemove)
    {
        $this->validators->detach($validatorToRemove);
    }

    /**
     * Returns the validators
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Validator> $validators
     */
    public function getValidators()
    {
        return $this->validators;
    }

    /**
     * Sets the validators
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Validator> $validators
     * @return void
     */
    public function setValidators(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $validators)
    {
        $this->validators = $validators;
    }

    /**
     * Adds a ErrorMessage
     *
     * @param \CGB\Relax5validator\Domain\Model\ErrorMessage $errorMessage
     * @return void
     */
    public function addErrorMessage(\CGB\Relax5validator\Domain\Model\ErrorMessage $errorMessage)
    {
        $this->errorMessage->attach($errorMessage);
    }

    /**
     * Removes a ErrorMessage
     *
     * @param \CGB\Relax5validator\Domain\Model\ErrorMessage $errorMessageToRemove The ErrorMessage to be removed
     * @return void
     */
    public function removeErrorMessage(\CGB\Relax5validator\Domain\Model\ErrorMessage $errorMessageToRemove)
    {
        $this->errorMessage->detach($errorMessageToRemove);
    }

    /**
     * Returns the errorMessage
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\ErrorMessage> $errorMessage
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * Sets the errorMessage
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\ErrorMessage> $errorMessage
     * @return void
     */
    public function setErrorMessage(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $errorMessage)
    {
        $this->errorMessage = $errorMessage;
    }

    /**
     * 
     * @return type
     */
    public function getSingleErrorMessage () {
        if ($this->errorMessage->count() > 0 ) {
            return $this->errorMessage->current()->getErrorMessage();
        } else {
            return null;
        }
    }
    
}
