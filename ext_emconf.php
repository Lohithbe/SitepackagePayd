<?php

/**
 * Extension Manager/Repository config file for ext "site_package_payd".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'Site Package Payd',
    'description' => 'TYPO3 site package for Payd',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.0-9.5.99',
            'rte_ckeditor' => '8.7.0-9.5.99',
            'bootstrap_package' => '9.1.0-9.1.99'
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'HofUniversity\\SitePackagePayd\\' => 'Classes'
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Lohith Byadarahalli Eswarappa',
    'author_email' => 'be.lohith1992@gmail.com',
    'author_company' => 'Hof-University',
    'version' => '1.0.0',
];
