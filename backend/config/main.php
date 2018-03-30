<?php
$params = array_merge(
    require __DIR__ . '/../../common/config/params.php',
    require __DIR__ . '/../../common/config/params-local.php',
    require __DIR__ . '/params.php',
    require __DIR__ . '/params-local.php'
);
return [
    'id' => 'app-backend',
    'basePath' => dirname(__DIR__),
    'controllerNamespace' => 'backend\controllers',
    'language' => 'zh-CN',//use chinese 
    'bootstrap' => ['log'],
    'modules' => [
    "admin" => [
            "class" => "mdm\admin\Module",
        ],
    ],
    "aliases" => [
     "@mdm/admin" => "@vendor/mdmsoft/yii2-admin",
    ],
    'as access' => [
        'class' => 'mdm\admin\components\AccessControl',
        'allowActions' => [
            //这里是允许访问的action
            //controller/action
            // * 表示允许所有，后期会介绍这个
            '*'
        ]
    ],
    'components' => [
        'request' => [
            'csrfParam' => '_csrf-backend',
        ],
        'user' => [
            'identityClass' => 'common\models\User',
            'enableAutoLogin' => true,
            'identityCookie' => ['name' => '_identity-backend', 'httpOnly' => true],
        ],
        'session' => [
            // this is the name of the session cookie used for login on the backend
            'name' => 'advanced-backend',
        ],
           // 语言包配置
        'i18n' => [
            'translations' => [
                'common' => [
                    'class' => 'yii\i18n\PhpMessageSource', //引用yii自带的语言包的类
                    // 'basePath' => '/messages', // 默认的资源文件存放位置
                    'fileMap' => [
                        'common' => 'common.php'
                    ],
                ],
                 'ligin' => [
                    'class' => 'yii\i18n\PhpMessageSource', //引用yii自带的语言包的类
                    // 'basePath' => '/messages', // 默认的资源文件存放位置
                    'fileMap' => [
                        'ligin' => 'ligin.php'
                    ],
                ],
            ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        'rules' => [
            ],
       ], 
        "authManager" => [
            "class" => 'yii\rbac\DbManager',
            "defaultRoles" => ["guest"],
        ],
    ],
    'params' => $params,
];