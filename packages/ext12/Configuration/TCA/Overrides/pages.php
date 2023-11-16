<?php
if (!defined('TYPO3')) die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::registerPageTSConfigFile(
    'ext12',
    'Configuration/TSconfig/page.tsconfig',
    'ext12 Backend Layouts'
);