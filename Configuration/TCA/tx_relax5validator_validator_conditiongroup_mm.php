<?php

if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}
return array(
	'ctrl'      => array(
		'title'     => 'Relation table',
		'label' => 'uid_foreign',
		'hideTable' => TRUE,
		'sortby'    => 'sorting',
	),
	'columns'   => array(
		'uid_local' => Array(
			'label'  => 'Validator',
			'config' => Array(
				'type'          => 'select',
				'foreign_table' => 'tx_relax5validator_domain_model_validator',
				'size'          => 1,
				'minitems'      => 0,
				'maxitems'      => 1,
			),
		),
		'uid_foreign'   => Array(
			'label'  => 'Conditiongroup',
			'config' => Array(
				'type'                => 'select',
                'items'               => [['',0]],
				'foreign_table'       => 'tx_relax5validator_domain_model_conditiongroup',
				'foreign_table_where' => ' AND sys_language_uid IN (0,-1) ORDER BY tx_relax5validator_domain_model_conditiongroup.title',
				'size'                => 1,
				'minitems'            => 0,
				'maxitems'            => 1,
			),
		),
        'additional_info' => [
            'exclude' => true,
            'label' => 'Additional Info',
            'config' => [
                'type' => 'input',
                'size' => 30,
                'eval' => 'trim'
            ],
        ],
        
	),
	'types'     => array(
		'0' => array('showitem' => 'uid_local,uid_foreign,additional_info')
	),
	'palettes'  => array()
);