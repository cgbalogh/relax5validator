<?php
namespace CGB\Relax5validator\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 Lorenz Ulrich <lorenz.ulrich@visol.ch>, visol digitale Dienstleistungen GmbH
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ConditiongroupRelation
 */
class ConditiongroupRelation extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * Validator
	 *
	 * @var \CGB\Relax5validator\Domain\Model\Validator
	 */
	protected $validator;

	/**
	 * Conditiongroup
	 *
	 * @var \CGB\Relax5validator\Domain\Model\Conditiongroup
	 */
	protected $conditiongroup;

	/**
     * 
     * @return \CGB\Relax5validator\Domain\Model\Validator
     */
    public function getValidator() {
		return $this->validator;
	}

	/**
	 * @param \CGB\Relax5validator\Domain\Model\Validator $validator
	 */
	public function setValidator($validator) {
		$this->validator = $validator;
	}

    /**
     * 
     * @return \CGB\Relax5validator\Domain\Model\Conditiongroup|null
     */
    function getConditiongroup() {
        return $this->conditiongroup;
    }

    /**
     * 
     * @param \CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroup
     */
    function setConditiongroup(\CGB\Relax5validator\Domain\Model\Conditiongroup $conditiongroup) {
        $this->conditiongroup = $conditiongroup;
    }


}