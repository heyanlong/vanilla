<?php
require __DIR__ . '/../vendor/autoload.php';

try {
    \Vanilla\Config\Environment::load(__DIR__ . '/..');
} catch (Exception $e) {
    header("Content-type: application/json; charset=utf-8");
    echo json_encode(['msg' => 'network fail, try again later!', 'code' => 99999]);
    exit;
}
$app = new \Vanilla\Application(dirname(__DIR__));
$app->process(new \Vanilla\Process\Http($app));
$app->run();