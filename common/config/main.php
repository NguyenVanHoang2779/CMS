<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
    // 'as beforeRequest' => [  
    //     'class' => 'yii\filters\AccessControl',
    //     'rules' => [
    //         [
    //             'actions' => ['login', 'error'],
    //             'allow' => true,
    //         ],
    //         [
    //             'allow' => true,
    //             'roles' => ['@'],
    //         ],
    //     ],
    // ],
];
//if guest user access site so, redirect to login page.
