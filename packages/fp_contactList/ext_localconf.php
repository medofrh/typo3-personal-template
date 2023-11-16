<?php

// Plugin konfigurieren

use Fixpunkt\FpContactlist\Controller\ContactController;

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
    'FpContactlist',
    'Output',
    [
        ContactController::class => 'list',
    ],
    // non-cacheable actions
    []
);