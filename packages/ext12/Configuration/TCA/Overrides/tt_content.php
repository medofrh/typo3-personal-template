<?php


// override default settings
$GLOBALS['TCA']['tt_content']['types']['b13-4cols-with-header-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';

$GLOBALS['TCA']['tt_content']['types']['cd-detail-section']['showitem'] = '
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:general,
        --palette--;;general,
        --palette--;;headers,               
        bodytext;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:bodytext_formlabel,
    --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.appearance,
        --palette--;;frames,
        --palette--;;appearanceLinks,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:language,
        --palette--;;language,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:access,
        --palette--;;hidden,
        --palette--;;access,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:categories,
        categories,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:notes,
        rowDescription,
    --div--;LLL:EXT:core/Resources/Private/Language/Form/locallang_tabs.xlf:extended,
';

$GLOBALS['TCA']['tt_content']['types']['cd-detail-section']['columnsOverrides']['bodytext']['config'] = [
    'rows' => 5,
    'enableRichtext' => true,
];

// four column container with aside
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols', // CType
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
