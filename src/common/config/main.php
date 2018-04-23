<?php
return [
    'language' => 'fa-IR',
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
	'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=eg-cms-mini',
            'username' => 'eg',
            'password' => 'Ht3KK9LFd2iVssCD',
            'charset' => 'utf8',
			'tablePrefix' => 'eg_',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
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
		'user' => [
			'class' => 'elephantsGroup\user\Module',
			'enableWelcomMessage' => false,
		],
	]
];
