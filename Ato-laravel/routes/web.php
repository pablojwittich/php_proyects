<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AtoController;

//GET
Route::get('/app', [AtoController::class, 'app'])->name('app');
Route::get('index', [AtoController::class, 'index'])->name('index');
Route::get('/quienes', [AtoController::class, 'quienes'])->name('quienes');
Route::get('/vision', [AtoController::class, 'vision'])->name('vision');
Route::get('/mision', [AtoController::class, 'mision'])->name('mision');

Route::get('/form-register', [AuthController::class, 'showRegisterForm'])->name('register');


//POST
Route::post('/register', [AuthController::class, 'RegisterUser'])->name('register.user');
