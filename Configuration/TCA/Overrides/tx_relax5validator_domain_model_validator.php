<?php
$GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['columns']['conditiongroups'] = [
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_validator.conditiongroups',
    'config' => [
        'appearance'       => array(
            'collapseAll'     => FALSE,
            'expandSingle'    => TRUE,
            'useCombination'  => 1,
            'useSortable'     => TRUE,
            'levelLinksPosition' => 'none',
            'newRecordLinkTitle' => ' Create new Conditiongroup',
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
        'foreign_table' => 'tx_relax5validator_validator_conditiongroup_mm',
        'foreign_field' => 'uid_local',
        'foreign_label' => 'uid_foreign',
        'foreign_selector' => 'uid_foreign',
        'foreign_unique' => 'uid_foreign',
        'foreign_sortby' => 'sorting',
        'maxitems' => 999
    ],
];

// $GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['columns']['title']['config']['eval'] = 'CGB\\Relax5validator\\Backend\\LoadDomainModelPropertiesEvaluation';

$ext_path =   \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('relax5validator');
require_once($ext_path . 'Classes/UserFunc/TcaUserFunc.php');
$items = \CGB\Relax5validator\UserFunc\TcaUserFunc::getClasses();

$GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['columns']['domain_model_object'] = array(
    'exclude' => 1,
    'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_validator.domain_model_object',
    'config' => array(
        'type' => 'select',
        'renderType' => 'selectSingle',
        'items' => $items,
        'size' => 1,
        'maxitems' => 1,
        'minitems' => 0,
    ),
);

// $GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['ctrl']['label'] = 'name';
// $GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['ctrl']['label_alt'] = 'domain_model_object';
// $GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['ctrl']['label_alt_force'] = 1;
$GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['ctrl']['iconfile'] = 'EXT:core/Resources/Public/Icons/T3Icons/actions/actions-markstate.svg';

// $GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['columns']['validationgroups']['config']['appearance']['collapseAll'] = 1;

// $GLOBALS['TCA']['tx_relax5validator_domain_model_validator']['columns']['validationgroups']['config']['appearance']['expandSingle'] = 1;
