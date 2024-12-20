<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            return view('index');
        }
        return view('Auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('emial', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('index')
                ->withSuccess('Logeado corerectamente ');
        }
        return redirect("auth.register")->withSuccess('Los datos introducidos no son correctos');
    }
}
