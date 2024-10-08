<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissController;

//GET
Route::get('/', [MissController::class, 'index']);
Route::get('/app', [MissController::class, 'app']);
