<?php

namespace App\Exceptions;

use Vanilla\Exceptions\Handler as VanillaHandle;
use Vanilla\Exceptions\ValidateException;

class Handler extends VanillaHandle
{
    public $dontReport = [

    ];

    public function render($request, \Exception $e)
    {
        if ($e instanceof ValidateException) {
            return json(['code' => 10412, 'msg' => $e->getMessage()]);
        }
        return parent::render($request, $e);
    }
}