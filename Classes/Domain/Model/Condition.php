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
 * Condition
 */
class Condition extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Domain Model Object
     *
     * @var string
     */
    protected $domainModelObject = '';

    /**
     * @var string
     */
    protected $property = '';

    /**
     * Name
     *
     * @var string
     */
    protected $name = '';

    /**
     * storageObjectReference
     *
     * @var string
     */
    protected $storageObjectReference = 0;

    /**
     * negate
     *
     * @var bool
     */
    protected $negate = false;

    /**
     * Operator
     *
     * @var string
     */
    protected $operator = 0;

    /**
     * Value
     *
     * @var string
     */
    protected $value = '';

    /**
     * mapErrorToProperty
     *
     * @var string
     */
    protected $mapErrorToProperty = '';

    /**
     * Error Message
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\ConditionToErrorMessageRelation>
     */
    protected $errorMessage = null;

    /**
     * Returns the value
     *
     * @return string $value
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Sets the value
     *
     * @param string $value
     * @return void
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * Returns the operator
     *
     * @return string operator
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Sets the operator
     *
     * @param int $operator
     * @return void
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return bool
     */
    function getNegate()
    {
        return $this->negate;
    }

    /**
     * Returns the property
     *
     * @return \CGB\Relax5validator\Domain\Model\Property
     */
    function getProperty()
    {
        return $this->property;
    }

    /**
     * Returns the property
     *
     * @return string
     */
    function getPropertyWithReferences()
    {
        return vsprintf(
            str_replace('#', '%s', $this->property),
            \TYPO3\CMS\Core\Utility\GeneralUtility::intExplode(',', $this->storageObjectReference)
        );
    }

    /**
     * @param bool $negate
     */
    function setNegate($negate)
    {
        $this->negate = $negate;
    }

    /**
     * Sets the property
     *
     * @param \CGB\Relax5validator\Domain\Model\Property $property
     */
    function setProperty(\CGB\Relax5validator\Domain\Model\Property $property)
    {
        $this->property = $property;
    }

    /**
     * Returns the mapErrorToProperty
     *
     * @return string $mapErrorToProperty
     */
    public function getMapErrorToProperty()
    {
        return $this->mapErrorToProperty;
    }

    /**
     * Sets the mapErrorToProperty
     *
     * @param string $mapErrorToProperty
     * @return void
     */
    public function setMapErrorToProperty($mapErrorToProperty)
    {
        $this->mapErrorToProperty = $mapErrorToProperty;
    }

    /**
     * Returns the domainModelObject
     *
     * @return string $domainModelObject
     */
    public function getDomainModelObject()
    {
        return $this->domainModelObject;
    }

    /**
     * Sets the domainModelObject
     *
     * @param string $domainModelObject
     * @return void
     */
    public function setDomainModelObject($domainModelObject)
    {
        $this->domainModelObject = $domainModelObject;
    }

    /**
     * Returns the storageObjectReference
     *
     * @return string storageObjectReference
     */
    public function getStorageObjectReference()
    {
        return $this->storageObjectReference;
    }

    /**
     * Sets the storageObjectReference
     *
     * @param int $storageObjectReference
     * @return void
     */
    public function setStorageObjectReference($storageObjectReference)
    {
        $this->storageObjectReference = $storageObjectReference;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

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
        $this->errorMessage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
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
