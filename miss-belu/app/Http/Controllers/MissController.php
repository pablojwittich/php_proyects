<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function app()
    {
        return view('app');
    }
}
