<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'ext12',
    'description' => 'Extension for TYPO3 12',
    'category' => 'tamplates',
    'author' => 'Mohamad Sulaiman',
    'author_email' => 'm.sulaiman@fixpunkt.com',
    'author_company' => 'fixpunkt GmbH',
    'state' => 'stable',
    'version' => '1.0.0',
    'clearCacheOnLoad' => 1,
    'uploadfolder' => 0,
    'constraints' => [
        'depends' => [
            'typo3' => '12.0.0-12.4.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
        ],
    ],
];