<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

//Get 
Route::get('/', [OrderController::class, 'app'])->name('app');
Route::get('/index',[OrderController::class, 'index'])->name('index');
Route::get('/quienes',[OrderController::class, 'quienes'])->name('quienes');
Route::get('/libros', [OrderController::class, 'libros'])->name('libros');
Route::get('/contacto', [OrderController::class, 'contacto'])->name('contacto');
Route::get('/login', [OrderController::class, 'login'])->name('login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
