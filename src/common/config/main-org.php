<?php
return [
    'language' => 'fa-IR',
    'vendorPath' => dirname(dirname(dirname(__DIR__))) . '/vendor',
	'components' => [
		'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=localhost;dbname=[DBNAME]',
            'username' => '[DBUSER]',
            'password' => '[DBPASS]',
            'charset' => 'utf8',
			'tablePrefix' => '[PREFIX]',
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
        /*[STAT_CONFIG_BEGIN]'stat' => [
            'class' => 'elephantsGroup\stat\Module',
        ],[STAT_CONFIG_END]*/
		'user' => [
			'class' => 'elephantsGroup\user\Module',
			'enableWelcomMessage' => false,
		],
        /*[FOLLOW_CONFIG_BEGIN]'follow' => [
            'class' => 'elephantsGroup\follow\Module',
        ],[FOLLOW_CONFIG_END]*/ 
        /*[LIKE_CONFIG_BEGIN]'like' => [
            'class' => 'elephantsGroup\like\Module',
        ],[LIKE_CONFIG_END]*/
        /*[STAR_RATING_CONFIG_BEGIN]'star-rating' => [
            'class' => 'elephantsGroup\starRating\Module',
        ],[STAR_RATING_CONFIG_END]*/
        /*[COMMENT_CONFIG_BEGIN]'comment' => [
            'class' => 'elephantsGroup\comment\Module',
        ],[COMMENT_CONFIG_END]*/
        /*[CONTACT_CONFIG_BEGIN]'contact' => [
            'class' => 'elephantsGroup\contact\Module',
        ],[CONTACT_CONFIG_END]*/
        /*[BLOG_CONFIG_BEGIN]'blog' => [
            'class' => 'elephantsGroup\blog\Module',
        ],[BLOG_CONFIG_END]*/
        /*[EVENT_CONFIG_BEGIN]'event' => [
            'class' => 'elephantsGroup\event\Module',
        ],[EVENT_CONFIG_END]*/
        /*[NEWS_CONFIG_BEGIN]'news' => [
            'class' => 'elephantsGroup\news\Module',
        ],[NEWS_CONFIG_END]*/
        /*[GALLERY_CONFIG_BEGIN]'gallery' => [
            'class' => 'elephantsGroup\gallery\Module',
        ],[GALLERY_CONFIG_END]*/
        /*[OWL_SLIDER_CONFIG_BEGIN]'owl-slider' => [
            'class' => 'elephantsGroup\owlSlider\Module',
        ],[OWL_SLIDER_CONFIG_END]*/
	],
];
