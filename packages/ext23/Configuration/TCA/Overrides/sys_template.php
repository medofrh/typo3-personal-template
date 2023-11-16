<?php

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'ext23',
        'Configuration/TypoScript/',
        'My Extension'
    );
});