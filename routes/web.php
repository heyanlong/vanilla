<?php

/**
 * @var $r \FastRoute\RouteCollector
 */
$r->get('/', [\App\Http\Controllers\IndexController::class, 'index']);