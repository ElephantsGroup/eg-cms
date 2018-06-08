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
        'user' => [
            'identityCookie' => [
                'name'     => '_backendIdentity',
                'path'     => '/admin',
                'httpOnly' => true,
            ],
        ],
        /*'session' => [
            'name' => 'BACKENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/admin',
            ],
        ],*/
    ],
    'modules' => [
        'stat' => [
            'layout' => '//sb-admin',
        ],
       'admin' => [
            'class' => 'elephantsGroup\admin\Module',
            'layout' => '//sb-admin',
        ],
        'user' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\user\filters\BackendFilter',
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
    'as access' => [
        'class' => 'elephantsGroup\admin\components\AccessControl',
        'allowActions' => [
            'user/security/login',
            'user/security/logout',
        ],
    ],
    'params' => $params,
];
