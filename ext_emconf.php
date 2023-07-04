<?php

/**
 * Extension Manager/Repository config file for ext "ucph_ce_config".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'UCPH TYPO3 content element configuration',
    'description' => 'UCPH TYPO3 content element configuration',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfCopenhagen\\UcphCeConfig\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nanna Ellegaard',
    'author_email' => 'nel@adm.ku.dk',
    'author_company' => 'University of Copenhagen',
    'version' => '1.0.0',
];
