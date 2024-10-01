<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

//GET
Route::get('/', [TaskController::class, 'index']);
Route::get('/app', [TaskController::class, 'app']);

//POST
Route::post('/', [TaskController::class, 'store']);
