<?php
$params = array_merge(
    require(__DIR__ . '/../../common/config/params.php'),
    require(__DIR__ . '/../../common/config/params-local.php'),
    require(__DIR__ . '/params.php'),
    require(__DIR__ . '/params-local.php')
);

return [
    'id' => 'eg-cms',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'controllerNamespace' => 'backend\controllers',
    'components' => [
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
    ],
	'modules' => [
        'stat' => [
            'layout' => '//sb-admin',
        ], 
       'admin' => [
            'class' => 'elephantsGroup\admin\Module',
            'layout' => '//sb-admin',
        ],
       'service-relation' => [
            'class' => 'elephantsGroup\serviceRelation\Module',
            'layout' => '//sb-admin',
			'services' => [
				1 => 'News',
				2 => 'Events',
			],
        ],
		'follow' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\follow\filters\BackendFilter',
		],
		'like' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\like\filters\BackendFilter',
		],
		'star-rating' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\starRating\filters\BackendFilter',
		],
		'comment' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\comment\filters\BackendFilter',
		],
		'contact' => [
            'layout' => '//sb-admin',
		],
		'blog' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\blog\filters\BackendFilter',
		],
		'event' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\event\filters\BackendFilter',
		],
		'news' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\news\filters\BackendFilter',
		],
		'gallery' => [
            'layout' => '//sb-admin',
			'as backend' => 'elephantsGroup\gallery\filters\BackendFilter',
		],
		'owl-slider' => [
            'layout' => '//sb-admin',
		],
	],
    'params' => $params,
];
