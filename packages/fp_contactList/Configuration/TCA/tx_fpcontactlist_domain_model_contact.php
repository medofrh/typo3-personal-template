<?php
return array(
	'ctrl' => array(
		//title'	=> 'LLL:EXT:fp_social/Resources/Private/Language/locallang.xlf:tx_fpsocial_domain_model_access',
        'title' => 'Contact',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden'
		),
		'searchFields' => 'name,email,phone',
		'iconfile' => 'EXT:fp_contactlist/Resources/Public/Icons/Models/tx_fpcontactlist_domain_model_contact.svg',
	),
	'types' => [
        0 => [
            'showitem' => 'name, email, phone'
        ]
	],
	'columns' => [
        'name' => array(
            'exclude' => 0,
            'label' => 'Name',
            'config' => array(
                'type' => 'input',
                'eval' => 'trim',
                'required' => true,
            ),
        ),
        'email' => array(
            'exclude' => 0,
            'label' => 'Email address',
            'config' => array(
                'type' => 'email',
                'required' => true,
            ),
        ),
        'phone' => array(
            'exclude' => 0,
            'label' => 'Phone number',
            'config' => array(
                'type' => 'input',
                'eval' => 'num',
                'required' => true,
            ),
        )
    ]
);