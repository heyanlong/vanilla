<?php
require __DIR__ . '/../vendor/autoload.php';

\Vanilla\Config\Environment::load("/you/redis/map");
$app = new \Vanilla\Application(dirname(__DIR__));
$response = $app->run();
$response->send();