<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AtoController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function app()
    {
        return view('app');
    }

    public function quienes()
    {
        return view('quienes');
    }

    public function mision()
    {
        return view('mision');
    }

    public function vision()
    {
        return view('vision');
    }
}