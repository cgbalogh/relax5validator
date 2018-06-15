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
			'label'  => 'Conditiongroup',
			'config' => Array(
				'type'          => 'select',
				'foreign_table' => 'tx_relax5validator_domain_model_conditiongroup',
				'size'          => 1,
				'minitems'      => 0,
				'maxitems'      => 1,
			),
		),
		'uid_foreign'   => Array(
			'label'  => 'Errormessage',
			'config' => Array(
				'type'                => 'select',
                'items'               => [['',0]],
				'foreign_table'       => 'tx_relax5validator_domain_model_errormessage',
				'foreign_table_where' => ' AND sys_language_uid IN (0,-1) ORDER BY tx_relax5validator_domain_model_errormessage.text',
				'size'                => 1,
				'minitems'            => 0,
				'maxitems'            => 1,
			),
		),
        
	),
	'types'     => array(
		'0' => array('showitem' => 'uid_local,uid_foreign')
	),
	'palettes'  => array()
);