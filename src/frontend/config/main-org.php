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
        'user' => [
            'identityCookie' => [
                'name'     => '_frontendIdentity',
                'path'     => '/',
                'httpOnly' => true,
            ],
        ],
        /*'session' => [
            'name' => 'FRONTENDSESSID',
            'cookieParams' => [
                'httpOnly' => true,
                'path'     => '/',
            ],
        ],*/
    ],
    'modules' => [
        'admin' => [
            'class' => 'elephantsGroup\admin\Module',
        ],
       /*[STAT_CONFIG_BEGIN]'stat' => [
            'layout' => '//sb-admin',
            'as frontend' => 'elephantsGroup\stat\filters\FrontendFilter',
        ],[STAT_CONFIG_END]*/
        'user' => [
            'as frontend' => 'elephantsGroup\user\filters\FrontendFilter',
        ],
        /*[FOLLOW_CONFIG_BEGIN]'follow' => [
            'as frontend' => 'elephantsGroup\follow\filters\FrontendFilter',
        ],[FOLLOW_CONFIG_END]*/
        /*[LIKE_CONFIG_BEGIN]'like' => [
            'as frontend' => 'elephantsGroup\like\filters\FrontendFilter',
        ],[LIKE_CONFIG_END]*/
		/*[COMMENT_CONFIG_BEGIN]'comment' => [
            'as frontend' => 'elephantsGroup\comment\filters\FrontendFilter',
        ],[COMMENT_CONFIG_END]*/
        /*[BLOG_CONFIG_BEGIN]'blog' => [
            'as frontend' => 'elephantsGroup\blog\filters\FrontendFilter',
        ],[BLOG_CONFIG_END]*/
        /*[EVENT_CONFIG_BEGIN]'event' => [
            'as frontend' => 'elephantsGroup\event\filters\FrontendFilter',
        ],[EVENT_CONFIG_END]*/
		/*[NEWS_CONFIG_BEGIN]'news' => [
            'as frontend' => 'elephantsGroup\news\filters\FrontendFilter',
        ],[NEWS_CONFIG_END]*/
        /*[GALLERY_CONFIG_BEGIN]'gallery' => [
            'as frontend' => 'elephantsGroup\gallery\filters\FrontendFilter',
        ],[GALLERY_CONFIG_END]*/
        /*[OWL_SLIDER_CONFIG_BEGIN]'owl-slider' => [
            'as frontend' => 'elephantsGroup\owlSlider\filters\FrontendFilter',
        ],[OWL_SLIDER_CONFIG_END]*/
    ],
    'as access' => [
        'class' => 'elephantsGroup\admin\components\AccessControl',
        'allowActions' => [
            'site/*',
            'user/settings/*',
            'user/profile/*',
            'user/security/login',
            'user/security/register',
            'user/registration/*',
            'user/security/logout',
      			/*[FOLLOW_CONFIG_BEGIN]'follow/ajax/*',[FOLLOW_CONFIG_END]*/
      			/*[LIKE_CONFIG_BEGIN]'like/ajax/*',[LIKE_CONFIG_END]*/
      			/*[STAR_RATING_CONFIG_BEGIN]'star-rating/ajax/*',[STAR_RATING_CONFIG_END]*/
      			/*[COMMENT_CONFIG_BEGIN]'comment/ajax/*',[COMMENT_CONFIG_END]*/
            /*[BLOG_CONFIG_BEGIN]'blog/*',[BLOG_CONFIG_END]*/
            /*[EVENT_CONFIG_BEGIN]'event/*',[EVENT_CONFIG_END]*/
            /*[NEWS_CONFIG_BEGIN]'news/*',[NEWS_CONFIG_END]*/
            /*[GALLERY_CONFIG_BEGIN]'gallery/*',[GALLERY_CONFIG_END]*/
            /*[OWL_SLIDER_CONFIG_BEGIN]'owl-slider/*',[OWL_SLIDER_CONFIG_END]*/
        ],
    ],
    'params' => $params,
];
