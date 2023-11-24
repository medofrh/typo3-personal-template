<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTcaSelectItem(
    'tt_content',
    'CType',
    [
        // title
        'label' => 'Feature Element',
        // plugin signature: extkey_identifier
        'value' => 'feature_element', // extkey_pluginname
        // icon identifier
        'icon' => 'content-text',
        // group
        'group' => 'common',
        // description
        'description' => 'feature_element description',
    ],
    'textmedia',
    'after'
);

$GLOBALS['TCA']['tt_content']['types']['feature_element'] = [
    'showitem' => '
            --div--;general,
               --palette--;;general,
               image; Image,
               header; Header,
               bodytext;text,
         ',
    'columnsOverrides' => [
        'bodytext' => [
            'config' => [
                'enableRichtext' => true,
                'richtextConfiguration' => 'default',
            ],
        ],
        'image' => [
            'label' => 'Image',
            'config' => \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::getFileFieldTCAConfig(
                'image', [
                    'maxitems' => 1,
                    'appearance' => [
                        'collapseAll' => 1,
                        'showAllLocalizationLink' => 1,
                        'showPossibleLocalizationRecords' => 1,
                        'showSynchronizationLink' => 1,
                        'useSortable' => 1,
                        'enabledControls' => [
                            'info' => FALSE,
                            'new' => FALSE,
                            'dragdrop' => TRUE,
                            'sort' => FALSE,
                            'hide' => FALSE,
                            'delete' => FALSE,
                            'localize' => TRUE,
                        ],
                    ],
                ],
                $GLOBALS['TYPO3_CONF_VARS']['GFX']['imagefile_ext']
            ),
        ],
    ],
];

// Adds the content element icon to TCA typeicon_classes
$GLOBALS['TCA']['tt_content']['ctrl']['typeicon_classes']['feature_element'] = 'content-text';

// ...

// four column container with aside
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'Header', // CType
            'Header Container', // label
            'Header Container', // description
            [
                [
                    ['name' => 'Main Column', 'colPos' => 201, 'allowed' => ['CType' => 'textmedia,cta,text,bullets,cd_text,footnotes']],
                    ['name' => 'Sidebar Content', 'colPos' => 202, 'allowed' => ['CType' => 'sidebar-image']],
                ],
            ]
        )
    )
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'Features', // CType
            'feauters Container', // label
            'feauters Container', // description
            [
                [
                    ['name' => 'left-text', 'colPos' => 200, 'allowed' => ['CType' => 'text']],
                    ['name' => 'features', 'colPos' => 201, 'allowed' => ['CType' => 'textpic']]
                ]
            ] // grid configuration
        )
    )
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'Testimonial', // CType
            'Testimonial Container', // label 
            'Testimonial Container', // description 
            [
                [
                    ['name' => 'text', 'colPos' => 200, 'allowed' => ['CType' => 'textpic']]
                ]
            ] // grid configuration
        )
    )
);

\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'Blog', // CType
            'Blog Container', // label 
            'Blog Container', // description 
            [
                [
                    ['name' => 'title', 'colPos' => 200, 'allowed' => ['CType' => 'text']]
                ],
                [
                    ['name' => 'Blogs', 'colPos' => 201]
                ],
            ] // grid configuration
        )
    )
);
