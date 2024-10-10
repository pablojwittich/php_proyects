<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MissController extends Controller
{
    public function index()
    {
        return view("index");
    }

    public function app()
    {
        return view("app");
    }
    public function sobreMi()
    {
        return view("sobreMi");
    }
    public function misCursos()
    {
        return view("misCursos");
    }
    public function contactame()
    {
        return view("contactame");
    }
}
