<?php

$config = [
    'components' => [
        'request' => [
            'cookieValidationKey' => 'JCFEmNRGeh7W6EVs4u78THO_G5d7SDue',
            'csrfParam' => '_frontendCsrf',
        ],
        'session' => [
            'name' => '_frontendSessionId',
            'savePath' => __DIR__ . '/../runtime/sessions'
        ]
    ],
];

if (!YII_ENV_TEST) {
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = 'yii\debug\Module';
}

return $config;
