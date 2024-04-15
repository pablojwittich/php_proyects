<?php

namespace App\Http\Controllers;


class WebController extends Controller
{
    public function app()
    {
        return view('app');
    }

    public function index()
    {
        return view('index');
    }
}

?>
