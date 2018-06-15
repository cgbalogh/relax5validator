<?php
$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['error_message'] = [
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.error_message',
    'config' => [
        'appearance'       => array(
            'collapseAll'     => TRUE,
            'expandSingle'    => TRUE,
            'useCombination'  => 1,
            'useSortable'     => TRUE,
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
        'foreign_table' => 'tx_relax5validator_condition_errormessage_mm',
        'foreign_field' => 'uid_local',
        'foreign_label' => 'uid_foreign',
        'foreign_selector' => 'uid_foreign',
        'foreign_unique' => 'uid_foreign',
        'foreign_sortby' => 'sorting',
        'maxitems' => 1
    ],
];


$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['property'] = [
    'config' => [
        'type' => 'passthrough',
    ],
];

$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['ctrl']['label'] = 'property';
$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['ctrl']['label_alt'] = 'name, operator, value';
$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['ctrl']['label_alt_force'] = 1;
$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['ctrl']['hideTable'] = 0;

$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['domain_model_object'] = array(
    'onChange' => 'reload',
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.domain_model_object',
    'config' => array(
        'type' => 'select',
        'itemsProcFunc' => 'CGB\Relax5validator\UserFunc\TcaUserFunc->getDomainModelObjects',
        'renderType' => 'selectSingle',
        'size' => 1,
        'maxitems' => 1,
    ),
);

$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['property'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.property',
    'config' => array(
        'type' => 'select',
        'itemsProcFunc' => 'CGB\Relax5validator\UserFunc\TcaUserFunc->getProperties',
        'renderType' => 'selectSingle',
        'size' => 1,
        'maxitems' => 1,
    ),
);

$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['map_error_to_property'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.map_error_to_property',
    'config' => array(
        'type' => 'select',
        'itemsProcFunc' => 'CGB\Relax5validator\UserFunc\TcaUserFunc->getProperties',
        'renderType' => 'selectSingle',
        'size' => 1,
        'maxitems' => 1,
    ),
);

/**
 * allow empty value for sourcedetail
 */
$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['map_error_to_property']['config']['items'] = array(
    array('', 0),
);

/**
 * allow empty value for error message
 */
$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['error_message']['config']['items'] = array(
    array('', 0),
);

$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['operator'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.operator',
    'config' => array(
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => [],
        'size' => 1,
        'maxitems' => 1,
        'eval' => ''
    ),
);


/**
 * adjust select values for operator
 */
$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['operator']['config']['items'] = array(
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.equals', 'equal'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.not_equals', 'not equal'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.less_than', 'less than'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.less_than_or_equal', 'less than or equal'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.greater_than', 'greater than'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.greater_than_or_equal', 'greater than or equal'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.not_empty', 'not empty'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.empty', 'empty'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.int_in_range', 'integer in range'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.date_in_range', 'date in range'),
    array('LLL:EXT:relax5validator/Resources/Private/Language/locallang.xlf:tx_relax5validator_domain_model_condition.match_regexp', 'match regexp'),

);

$GLOBALS['TCA']['tx_relax5validator_domain_model_condition']['columns']['error_message']['config']['foreign_table_where'] = 'AND sys_language_uid = 0';
