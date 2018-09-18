<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'i18n' => [
            'translations' => [
                'yii2mod.comments' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'basePath' => '@yii2mod/comments/messages',
                ],
            ],
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'emailService' => [
            'class' => \common\services\EmailService::class
        ],
        'projectService' => [
            'class' => \common\services\ProjectService::class,
            'on '.\common\services\ProjectService::EVENT_ASSIGN_ROLE => function(\common\services\AssignRoleEvent $e){
//                exit(\common\services\ProjectService::EVENT_ASSIGN_ROLE);
                Yii::info(\common\services\ProjectService::EVENT_ASSIGN_ROLE, '_');
                $views = ['html' => 'assignRoleToProject-html', 'text' => 'assignRoleToProject-text'];
                $data = ['user' => $e->user, 'project' => $e->project, 'role' => $e->role];
                Yii::$app->emailService->send($e->user->email, 'New role ' . $e->role, $views, $data);
}
        ]
    ],
    'modules' => [
        'chat' => [
            'class' => 'common\modules\chat\Module',
        ],
        'comment' => [
            'class' => 'yii2mod\comments\Module',
        ],
    ],
];
