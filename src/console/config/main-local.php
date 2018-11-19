<?php
return [
    /*'bootstrap' => ['gii'],
    'modules' => [
        'gii' => 'yii\gii\Module',
    ],*/
    'components' => [
        'authManager' => [
            'class' => 'yii\rbac\DbManager', // or use 'yii\rbac\PhpManager'
        ],
    ],
];
