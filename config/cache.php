<?php
/**
 * Created by PhpStorm.
 * User: heyanlong
 * Date: 2018/7/31
 * Time: 上午10:26
 */
return [
    'type' => 'redis',
    'redis' => [
        'host' => env('REDIS_URI', 'tcp://127.0.0.1:26379?timeout=1'),
        'type' => 'sentinel',
        'service' => env('REDIS_NAME', 'mymaster'),
        'password' => env('REDIS_PASSWORD',''),
        'prefix' => 'vanilla'
    ]
];