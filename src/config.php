<?php

return [
    'setup_commands' =>[
        [
            'title' => 'Initial setup',
            'commands' =>    [
                'git checkout dev',
                'git pull',
                'composer dump',
                'php artisan cache:clear',
                'php artisan config:cache',
                'php artisan route:clear',
                'php artisan route:cache',
                'php artisan view:clear',
                'php artisan migrate:refresh',
                'php artisan db:seed',
            ]
        ],
        [
            'title' => 'Ongoing Setup',
            'commands' =>    [
                'git checkout dev',
                'git pull',
                'composer dump',
                'php artisan cache:clear',
                'php artisan config:cache',
                'php artisan route:clear',
                'php artisan route:cache',
                'php artisan view:clear',
                'php artisan migrate',
            ]
        ]
    ],

    'default_executor' => 'windows',

    'executors' => [
        'ubuntu' => \Shahadat\Edc\Executors\UbuntuCommandExecutor::class,
        'windows'=> \Shahadat\Edc\Executors\WindowsCommandExecutor::class,
    ],
];
