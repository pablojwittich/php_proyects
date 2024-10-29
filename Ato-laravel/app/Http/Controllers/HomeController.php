<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
    }

    public function login()
    {
        return view('login');
    }

    public function signIn()
    {
        return view('signIn');
    }

    public function quienes()
    {
        return view('quienes');
    }

    public function vision()
    {
        return view('vision');
    }

    public function mision()
    {
        return view('mision');
    }
}
