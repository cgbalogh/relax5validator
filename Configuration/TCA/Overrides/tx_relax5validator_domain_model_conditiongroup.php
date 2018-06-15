<?php
$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']
    ['columns']['conditions']['config']['appearance']['levelLinksPosition'] = 'bottom';

$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['columns']['error_message'] = [
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_conditiongroup.error_message',
    'config' => [
        'appearance'       => array(
            'collapseAll'     => FALSE,
            'expandSingle'    => TRUE,
            'useCombination'  => 1,
            'useSortable'     => TRUE,
            'levelLinksPosition' => 'none',
            'enabledControls' => array(
                'info',
                'new',
                'dragdrop',
                'sort',
                'hide',
                'delete',
                'localize'
            ),
        ),
        'type' => 'inline',
        'foreign_table' => 'tx_relax5validator_conditiongroup_errormessage_mm',
        'foreign_field' => 'uid_local',
        'foreign_label' => 'uid_foreign',
        'foreign_selector' => 'uid_foreign',
        'foreign_unique' => 'uid_foreign',
        'foreign_sortby' => 'sorting',
        'maxitems' => 1
    ],
];

$ext_path =   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('relax5validator');
require_once($ext_path . 'Classes/UserFunc/TcaUserFunc.php');
$items = \CGB\Relax5validator\UserFunc\TcaUserFunc::getClasses();


$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['columns']['domain_model_object'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_validator.domain_model_object',
    'config' => array(
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => $items,
        'size' => 1,
        'maxitems' => 1,
    ),
);

$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['columns']['property'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_conditiongroup.property',
    'config' => array(
        'type' => 'select',
        'itemsProcFunc' => 'CGB\Relax5validator\UserFunc\TcaUserFunc->getProperties',
        'renderType' => 'selectSingle',
        'size' => 1,
        'maxitems' => 1,
    ),
);

$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['ctrl']['hideTable'] = 0;

$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['types'][1] = 
    ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, title, disjunctive, conditions, error_message'];


$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['columns']['conditions']['config']['appearance']['collapseAll'] = 1;

$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['columns']['conditions']['config']['appearance']['expandSingle'] = 1;


/**
 * allow empty value for error_message
 */
$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['columns']['error_message']['config']['items'] = array(
    array('', 0),
);
$GLOBALS['TCA']['tx_relax5validator_domain_model_conditiongroup']['columns']['error_message']['config']['foreign_table_where'] = 'AND sys_language_uid = 0';

