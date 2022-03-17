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
        'authManager' => [
            'class' => 'yii\rbac\DbManager',
            'defaultRoles' => ['guest', 'user'],
        ],
    ],
    'modules' => [
        'gridview' =>  [     
             'class' => '\kartik\grid\Module'     
        ],
        'rbac' => [
            'class' => 'yii2mod\rbac\Module',
        ],
     ]
];
