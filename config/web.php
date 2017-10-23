<?php

$params = require(__DIR__ . '/params.php');
$db = require(__DIR__ . '/db.php');

$config = [
    'id' => 'basic',
    'name' => 'SpeedySMS',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
    'components' => [
        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'HYgpZGmSIlc7nUJOmauhNEhiRqZVXFzC',
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],        
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        /*
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false,
            'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'smtp.sendgrid.net',
                'username' => 'apikey',
                'password' => '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',
                //'port' => '587',
                'port' => '465',
                'encryption' => 'ssl',
             ],
             /*'transport' => [
                'class' => 'Swift_SmtpTransport',
                'host' => 'server227.web-hosting.com',
                //'host' => 'mail.speedysms.com.ng',
                //'host' => 'localhost',
                'username' => 'hello@speedysms.com.ng',
                'password' => '1qaz2wsx',
                //'port' => '587',
                'port' => '465', //'465',
                'encryption' => 'ssl',
             ], *
             'messageConfig' => [
                'from' => ['hello@helloworldng.com' => 'SpeedySMS Team'], // this is needed for sending emails
                'charset' => 'UTF-8',
            ]         
        ], 
        */
        'mailer' => [
            'class' => 'katanyoo\mailgunmailer\Mailer',
            'key' => 'key-b9742e93b3f5ac1f6ed84e3508a0aae6',
            'domain' => 'https://api.mailgun.net/v3/speedysms.com.ng',
        ], 
        /*
        'mailer' => [
            'class' => 'bryglen\sendgrid\Mailer',
            'username' => 'rasheedsaidi@gmail.com',
            'password' => 'newton@123',
            //'username' => 'apikey',
            //'password' => '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',
        ], */
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => $db,
        
        'urlManager' => [
            'class' => 'yii\web\UrlManager',
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
            ],
        ],
        'view' => [
            'theme' => [
                'pathMap' => [
                    '@Da/User/resources/views' => '@app/views/user'
                ]
            ]
        ]
        
    ],
    'params' => $params,
    'modules' => [
        'user' => [
            'class' => Da\User\Module::class,
            'classMap' => [
                'User' => app\models\User::class,
            ],
            //'prefix' => 'auth',
            'allowUnconfirmedEmailLogin' => true,
            'mailParams' => [
                'fromEmail' => 'hello@speedysms.com.ng',
                'welcomeMailSubject' => Yii::t('usuario', 'Welcome to {0}', $app->name),
                'confirmationMailSubject' => Yii::t('usuario', 'Confirm account on {0}', $app->name),
                'reconfirmationMailSubject' => Yii::t('usuario', 'Confirm email change on {0}', $app->name),
                'recoveryMailSubject' => Yii::t('usuario', 'Complete password reset on {0}', $app->name),
            ],
            'layout' => '@app/views/layouts/messaging'
        ],
        
        
    ]
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
