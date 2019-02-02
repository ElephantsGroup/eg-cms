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
        /*[STAT_CONFIG_BEGIN]'stat' => [
            'layout' => '//sb-admin',
        ],[STAT_CONFIG_END]*/
       'admin' => [
            'class' => 'elephantsGroup\admin\Module',
            'layout' => '//sb-admin',
        ],
        'user' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\user\filters\BackendFilter',
        ],
        /*[FOLLOW_CONFIG_BEGIN]'follow' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\follow\filters\BackendFilter',
        ],[FOLLOW_CONFIG_END]*/
        /*[LIKE_CONFIG_BEGIN]'like' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\like\filters\BackendFilter',
        ],[LIKE_CONFIG_END]*/
        /*[STAR_RATING_CONFIG_BEGIN]'star-rating' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\starRating\filters\BackendFilter',
        ],[STAR_RATING_CONFIG_END]*/
        /*[COMMENT_CONFIG_BEGIN]'comment' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\comment\filters\BackendFilter',
        ],[COMMENT_CONFIG_END]*/
        /*[CONTACT_CONFIG_BEGIN]'contact' => [
            'layout' => '//sb-admin',
        ],[CONTACT_CONFIG_END]*/
        /*[BLOG_CONFIG_BEGIN]'blog' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\blog\filters\BackendFilter',
        ],[BLOG_CONFIG_END]*/
        /*[EVENT_CONFIG_BEGIN]'event' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\event\filters\BackendFilter',
        ],[EVENT_CONFIG_END]*/
        /*[NEWS_CONFIG_BEGIN]'news' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\news\filters\BackendFilter',
        ],[NEWS_CONFIG_END]*/
        /*[GALLERY_CONFIG_BEGIN]'gallery' => [
            'layout' => '//sb-admin',
            'as backend' => 'elephantsGroup\gallery\filters\BackendFilter',
        ],[GALLERY_CONFIG_END]*/
        /*[OWL_SLIDER_CONFIG_BEGIN]'owl-slider' => [
            'layout' => '//sb-admin',
        ],[OWL_SLIDER_CONFIG_END]*/
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
