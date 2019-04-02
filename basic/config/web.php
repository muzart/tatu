<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'language' => 'uz',
    'name' => 'TUIT Urgench',
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'Oc8AYJk7Lx72IPN8QL6ebaQj3zaZLx5m',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'getid' => [
            'class' => 'app\helpers\GetUserId',
        ],
        'dateformatter' => [
            'class' => 'app\helpers\DateFormat',
        ],
        'user' => [
            'identityClass' => 'app\models\User',//mdm\admin\models\User
            'loginUrl' => ['site/login'],//rbac/user/login']
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => true,
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
        'formatter' => [
            'dateFormat' => 'dd-MM-yyyy',
            'datetimeFormat' => 'php:d-m-Y H:i:s',
            'timeFormat' => 'php:H:i:s',
            'decimalSeparator' => ',',
            'thousandSeparator' => ' ',
            'currencyCode' => 'Rs.',
            'class' => 'yii\i18n\Formatter',
        ],
        'db' => $db,
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => array(
                '<controller:\w+>/<id:\d+>' => '<controller>/view',
                '<controller:\w+>/<action:\w+>/<id:\d+>' => '<controller>/<action>',
                '<controller:\w+>/<action:\w+>' => '<controller>/<action>',
                '<module:\w+>/<controller:\w+>/<action:\w+>' => '<module>/<controller>/<action>',
                '<module:\w+>/<controller:\w+>/view/<id:\d+>' => '<module>/<controller>/view',
            ),
        ],
    ],
    'modules' => [
        'student' => [
            'class' => 'app\modules\student\StudentModule',
        ],
        'dekanat' => [
            'class' => 'app\modules\dekanat\DekanatModule',
        ],
        'university' => [
            'class' => 'app\modules\university\UniversityModule',
        ],
        'teacher' => [
            'class' => 'app\modules\teacher\TeacherModule',
        ],
        'subject' => [
            'class' => 'app\modules\subject\SubjectModule',
        ],
        'department' => [
            'class' => 'app\modules\department\DepartmentModule',
        ],
        'dormitory' => [
            'class' => 'app\modules\dormitory\DormitoryModule',
        ],
        'admin' => [
            'class' => 'app\modules\admin\AdminModule',
        ],
        'contract' => [
            'class' => 'app\modules\contract\ContractModule',
        ],
        'gridview' => [
            'class' => '\kartik\grid\Module'
        ]
    ],
    'aliases' => [
        '@university' => '@app/modules/university',
    ],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        // uncomment the following to add your IP if you are not connecting from localhost.
        //'allowedIPs' => ['127.0.0.1', '::1'],
    ];
}

return $config;
