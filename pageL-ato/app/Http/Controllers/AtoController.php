<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtoController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function app()
    {
        return view("app");
    }
    public function quienes()
    {
        return view("quienes");
    }
    public function vision()
    {
        return view("vision");
    }
    public function mision()
    {
        return view("mision");
    }
    public function inicio()
    {
        return view("inicio");
    }
}
