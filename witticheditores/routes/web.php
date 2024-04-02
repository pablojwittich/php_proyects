<?php

use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;

// GET
Route::get('/', [OrderController::class, 'app'])->name('app');

