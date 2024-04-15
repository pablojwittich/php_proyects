<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

// GET
Route::get('/', [WebController::class, 'app'])->name('app');
Route::get('/index', [WebController::class, 'index'])->name('index');
