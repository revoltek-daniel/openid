<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'OpenID authentication',
    'description' => 'OpenID authentication for TYPO3 CMS',
    'category' => 'services',
    'author' => 'Dmitry Dulepov, Markus Klein',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearCacheOnLoad' => false,
    'version' => '10.0.0',
    'constraints' => [
        'depends' => [
            'typo3' => '8.7.19-10.999.999',
            'setup' => '8.7.19-10.999.999',
        ],
        'conflicts' => [
            'naw_openid' => '',
            'naw_openid_be' => ''
        ],
        'suggests' => [],
    ],
];
