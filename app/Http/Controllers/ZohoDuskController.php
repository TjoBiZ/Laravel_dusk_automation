<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class ZohoDuskController extends Controller
{
    public function index(Request $request, Route $route): void
    {
        echo 'test controller ' . $route->getActionName() . ' <br> Secrond line';
    }
}
