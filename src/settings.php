<?php

require __DIR__ . '/../env.php';

date_default_timezone_set('UTC');

return [
    'settings' => [
        'displayErrorDetails' => true, // set to false in production

        // Renderer settings
        'renderer' => [
            'template_path' => __DIR__ . '/../templates/',
        ],

        // Monolog settings
        'logger' => [
            'name' => 'slim-app',
            'path' => __DIR__ . '/../logs/app.log',
        ],

        // Database connection
        'db' => [
            'dsn' => DB_DSN,
            'user' => DB_USER,
            'password' => DB_PASSWORD,
        ],
    ],
];
