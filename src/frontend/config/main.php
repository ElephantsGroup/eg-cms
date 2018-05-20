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
    'controllerNamespace' => 'frontend\controllers',
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
            'as frontend' => 'elephantsGroup\stat\filters\FrontendFilter',
        ],
		'follow' => [
			'as frontend' => 'elephantsGroup\follow\filters\FrontendFilter',
		],
		'like' => [
			'as frontend' => 'elephantsGroup\like\filters\FrontendFilter',
		],
		'comment' => [
			'as frontend' => 'elephantsGroup\comment\filters\FrontendFilter',
		],
		'blog' => [
			'as frontend' => 'elephantsGroup\blog\filters\FrontendFilter',
		],
		'event' => [
			'as frontend' => 'elephantsGroup\event\filters\FrontendFilter',
		],
		'news' => [
			'as frontend' => 'elephantsGroup\news\filters\FrontendFilter',
		],
		'gallery' => [
			'as frontend' => 'elephantsGroup\gallery\filters\FrontendFilter',
		],
		'owl-slider' => [
			'as frontend' => 'elephantsGroup\owlSlider\filters\FrontendFilter',
		],
	],
    'as access' => [
        'class' => 'elephantsGroup\admin\components\AccessControl',
        'allowActions' => [
			'site/*',
			'blog/*',
			'event/*',
			'news/*',
			'gallery/*',
			'owl-slider/*',
		],
	],
    'params' => $params,
];
