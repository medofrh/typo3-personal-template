<?php

call_user_func(function () {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        'fp_contactlist',
        'Configuration/TypoScript/',
        'Contact List'
    );
});