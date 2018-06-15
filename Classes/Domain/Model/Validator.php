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
 * Validator
 */
class Validator extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Title
     *
     * @var string
     * @validate NotEmpty
     */
    protected $title = '';

    /**
     * Context
     *
     * @var string
     * @validate NotEmpty
     */
    protected $context = '';

    /**
     * Domain Model Object
     *
     * @var string
     * @validate NotEmpty
     */
    protected $domainModelObject = '';

    /**
     * Debug
     *
     * @var bool
     */
    protected $debug = false;

    /**
     * Conditiongroups
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\ConditiongroupRelation>
     * @cascade remove
     */
    protected $conditiongroups = null;

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
        $this->conditiongroups = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the context
     *
     * @return string $context
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Sets the context
     *
     * @param string $context
     * @return void
     */
    public function setContext($context)
    {
        $this->context = $context;
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
     * Returns the debug
     *
     * @return bool $debug
     */
    public function getDebug()
    {
        return $this->debug;
    }

    /**
     * Sets the debug
     *
     * @param bool $debug
     * @return void
     */
    public function setDebug($debug)
    {
        $this->debug = $debug;
    }

    /**
     * Returns the boolean state of debug
     *
     * @return bool
     */
    public function isDebug()
    {
        return $this->debug;
    }

    /**
     * Adds a Property
     *
     * @param \CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroup
     * @return void
     */
    public function addConditiongroup(\CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroup)
    {
        $this->conditiongroups->attach($conditiongroup);
    }

    /**
     * Removes a Property
     *
     * @param \CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroupToRemove The Conditiongroup to be removed
     * @return void
     */
    public function removeConditiongroup(\CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroupToRemove)
    {
        $this->conditiongroups->detach($conditiongroupToRemove);
    }

    /**
     * Returns the conditiongroups
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Conditiongroup> conditiongroups
     */
    public function getConditiongroups()
    {
        return $this->conditiongroups;
    }

    /**
     * Sets the conditiongroups
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\CGB\Relax5validator\Domain\Model\Conditiongroup> $conditiongroups
     * @return void
     */
    public function setConditiongroups(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $conditiongroups)
    {
        $this->conditiongroups = $conditiongroups;
    }
}
