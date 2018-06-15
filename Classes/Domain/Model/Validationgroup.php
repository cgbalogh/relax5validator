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
 * Validationgroup
 */
class Validationgroup extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * Conditiongroup
     *
     * @var \CGB\Relax5validator\Domain\Model\Conditiongroup
     */
    protected $conditiongroup = null;

    /**
     * Returns the conditiongroup
     *
     * @return \CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroup
     */
    public function getConditiongroup()
    {
        return $this->conditiongroup;
    }

    /**
     * Sets the conditiongroup
     *
     * @param \CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroup
     * @return void
     */
    public function setConditiongroup(\CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroup)
    {
        $this->conditiongroup = $conditiongroup;
    }
}
