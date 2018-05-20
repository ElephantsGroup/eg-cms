<?php
return [
    'language' => 'fa-IR',
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
	'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=eg-cms',
            'username' => 'eg',
            'password' => 'Ht3KK9LFd2iVssCD',
            'charset' => 'utf8',
			'tablePrefix' => 'eg_',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ],
        'i18n' => [
            'translations' => [
                'app' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
                'config' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@common/messages',
                ],
            ],
        ],
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\DbManager'
        ],
		'jdate' => [
			'class' => 'elephantsGroup\jDate\DateTime',
		],
	],
    'modules' => [
        'base' => [
            'class' => 'elephantsGroup\base\Module',
            'language_array' => [
                'en' => [
                    'name' => 'English',
                    'dir' => 'ltr'
                ],
                'fa-IR' => [
                    'name' => 'Persian',
                    'dir' => 'rtl'
                ],
                'ar-SA' => [
                    'name' => 'Arabic',
                    'dir' => 'rtl'
                ]
            ],
            'default_language' => 'fa-IR'
        ],
        'stat' => [
            'class' => 'elephantsGroup\stat\Module',
        ], 
		'user' => [
			'class' => 'elephantsGroup\user\Module',
			'enableWelcomMessage' => false,
		],
	],
    'as access' => [
        'class' => 'elephantsGroup\admin\components\AccessControl',
        'allowActions' => [
			'admin/*'
		],
	]
];
