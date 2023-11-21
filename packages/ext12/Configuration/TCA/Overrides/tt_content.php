<?php


// override default settings
$GLOBALS['TCA']['tt_content']['types']['b13-4cols-with-header-container']['showitem'] = 'sys_language_uid,CType,header,tx_container_parent,colPos';

// four column container with aside
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-2cols', // CType
            'Header Container', // label
            'Header Container', // description
            [
                [
                    ['name' => 'Main Column', 'colPos' => 201, 'allowed' => ['CType' => 'textmedia,cta,text,image,bullets,cd_text,footnotes']],
                    ['name' => 'Sidebar Content', 'colPos' => 202, 'allowed' => ['CType' => 'text,sidebar-image']],
                ],
            ]
        )
    )
);
\TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\B13\Container\Tca\Registry::class)->configureContainer(
    (
        new \B13\Container\Tca\ContainerConfiguration(
            'b13-4cols-with-header-aside', // CType
            '4 Column with Aside and Header', // label
            'Some Description of the 4 Column Container with Aside and Header', // description
            [
                [
                        ['name' => '4-cols-aside', 'colPos' => 203],
                ],
                [
                    ['name' => '4-cols-header', 'colPos' => 200], // Header column
                    ['name' => '4-cols-left-1', 'colPos' => 201],
                    ['name' => '4-cols-left-2', 'colPos' => 202], // Content columns
                    ['name' => '4-cols-right-1', 'colPos' => 204]
                ],
                [
                    ['name' => '4-cols-aside', 'colPos' => 203],
                ]
            ] // grid configuration
        )
    )
);