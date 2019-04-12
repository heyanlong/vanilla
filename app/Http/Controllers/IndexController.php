<?php


namespace App\Http\Controllers;

use Vanilla\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request)
    {
        return json(['hello vanilla']);
    }
}