<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function app()
    {
        return view('app');
    }

    public function index()
    {
        return view('index');
    }

    public function quienes()
    {
        return view('quienes');
    }

    public function libros()
    {
        return view('libros');
    }

    public function contacto()
    {
        return view('contacto');
    }
}
