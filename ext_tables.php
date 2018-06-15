<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function()
    {

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('relax5validator', 'Configuration/TypoScript', 'relax5validator');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5validator_domain_model_validator', 'EXT:relax5validator/Resources/Private/Language/locallang_csh_tx_relax5validator_domain_model_validator.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5validator_domain_model_validator');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5validator_domain_model_conditiongroup', 'EXT:relax5validator/Resources/Private/Language/locallang_csh_tx_relax5validator_domain_model_conditiongroup.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5validator_domain_model_conditiongroup');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5validator_domain_model_condition', 'EXT:relax5validator/Resources/Private/Language/locallang_csh_tx_relax5validator_domain_model_condition.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5validator_domain_model_condition');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5validator_domain_model_errormessage', 'EXT:relax5validator/Resources/Private/Language/locallang_csh_tx_relax5validator_domain_model_errormessage.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5validator_domain_model_errormessage');

        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr('tx_relax5validator_domain_model_validationgroup', 'EXT:relax5validator/Resources/Private/Language/locallang_csh_tx_relax5validator_domain_model_validationgroup.xlf');
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_relax5validator_domain_model_validationgroup');

    }
);
## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
