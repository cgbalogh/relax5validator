<?php
return [
    'ctrl' => [
        'title' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition',
        'label' => 'domain_model_object',
        'tstamp' => 'tstamp',
        'crdate' => 'crdate',
        'cruser_id' => 'cruser_id',
        'sortby' => 'sorting',
        'versioningWS' => true,
        'languageField' => 'sys_language_uid',
        'transOrigPointerField' => 'l10n_parent',
        'transOrigDiffSourceField' => 'l10n_diffsource',
        'delete' => 'deleted',
        'enablecolumns' => [
            'disabled' => 'hidden',
        ],
        'searchFields' => 'domain_model_object,property,name,storage_object_reference,negate,operator,value,map_error_to_property,error_message',
        'iconfile' => 'EXT:relax5validator/Resources/Public/Icons/tx_relax5validator_domain_model_condition.gif'
    ],
    'interface' => [
        'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, domain_model_object, property, name, storage_object_reference, negate, operator, value, map_error_to_property, error_message',
    ],
    'types' => [
        '1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, domain_model_object, property, name, storage_object_reference, negate, operator, value, map_error_to_property, error_message'],
    ],
    'columns' => [
        'sys_language_uid' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'special' => 'languages',
                'items' => [
                    [
                        'LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages',
                        -1,
                        'flags-multiple'
                    ]
                ],
                'default' => 0,
            ],
        ],
        'l10n_parent' => [
            'displayCond' => 'FIELD:sys_language_uid:>:0',
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectSingle',
                'items' => [
                    ['', 0],
                ],
                'foreign_table' => 'tx_relax5validator_domain_model_condition',
                'foreign_table_where' => 'AND tx_relax5validator_domain_model_condition.pid=###CURRENT_PID### AND tx_relax5validator_domain_model_condition.sys_language_uid IN (-1,0)',
            ],
        ],
        'l10n_diffsource' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
        't3ver_label' => [
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'max' => 255,
            ],
        ],
        'hidden' => [
            'exclude' => true,
            'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
            ],
        ],

        'domain_model_object' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.domain_model_object',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'property' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.property',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'name' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.name',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'storage_object_reference' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.storage_object_reference',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'negate' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.negate',
            'config' => [
                'type' => 'check',
                'items' => [
                    '1' => [
                        '0' => 'LLL:EXT:lang/locallang_core.xlf:labels.enabled'
                    ]
                ],
                'default' => 0,
            ]
        ],
        'operator' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.operator',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'value' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.value',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'map_error_to_property' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.map_error_to_property',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        'error_message' => [
            'exclude' => true,
            'label' => 'LLL:EXT:relax5validator/Resources/Private/Language/locallang_db.xlf:tx_relax5validator_domain_model_condition.error_message',
            'config' => [
                'type' => 'select',
                'renderType' => 'selectMultipleSideBySide',
                'foreign_table' => 'tx_relax5validator_domain_model_errormessage',
                'MM' => 'tx_relax5validator_condition_errormessage_mm',
                'size' => 10,
                'autoSizeMax' => 30,
                'maxitems' => 9999,
                'multiple' => 0,
                'wizards' => [
                    '_PADDING' => 1,
                    '_VERTICAL' => 1,
                    'edit' => [
                        'module' => [
                            'name' => 'wizard_edit',
                        ],
                        'type' => 'popup',
                        'title' => 'Edit', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.edit
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_edit.gif',
                        'popup_onlyOpenIfSelected' => 1,
                        'JSopenParams' => 'height=350,width=580,status=0,menubar=0,scrollbars=1',
                    ],
                    'add' => [
                        'module' => [
                            'name' => 'wizard_add',
                        ],
                        'type' => 'script',
                        'title' => 'Create new', // todo define label: LLL:EXT:.../Resources/Private/Language/locallang_tca.xlf:wizard.add
                        'icon' => 'EXT:backend/Resources/Public/Images/FormFieldWizard/wizard_add.gif',
                        'params' => [
                            'table' => 'tx_relax5validator_domain_model_errormessage',
                            'pid' => '###CURRENT_PID###',
                            'setValue' => 'prepend'
                        ],
                    ],
                ],
            ],
            
        ],
    
        'conditiongroup' => [
            'config' => [
                'type' => 'passthrough',
            ],
        ],
    ],
];
