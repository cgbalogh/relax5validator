<?php
namespace CGB\Relax5validator\Domain\Repository;

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
 * The repository for Validators
 */
class ValidatorRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    /**
     * Initialize the repository
     */
    public function initializeObject()
    {
        $querySettings = $this->objectManager->get(\TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings::class);
        $querySettings->setRespectStoragePage(false);
        $this->setDefaultQuerySettings($querySettings);
    }
}
