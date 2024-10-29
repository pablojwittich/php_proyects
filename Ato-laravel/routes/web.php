<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/signIn', [HomeController::class, 'signIn'])->name('singIn');

Route::get('index', [HomeController::class, 'index'])->name('index');
Route::get('/app', [HomeController::class, 'app'])->name('app');
Route::get('/quienes', [HomeController::class, 'quienes'])->name('quienes');
Route::get('/mision', [HomeController::class, 'mision'])->name('mision');
Route::get('/vision', [HomeController::class, 'vision'])->name('vision');
