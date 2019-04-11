<?php

return [
    'default' => [
        'host' => env('DB_HOST', '127.0.0.1'),
        'database' => env('DB_DATABASE', ''),
        'port' => env('DB_PORT', '3306'),
        'username' => env('DB_USERNAME', ''),
        'password' => env('DB_PASSWORD', ''),
        'commands' => 'SET autocommit=ON,SET NAMES utf8mb4'
    ]
];