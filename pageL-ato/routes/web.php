<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtoController;

//GET
Route::get("/", [AtoController::class, "index"])->name("index");
Route::get("/app", [AtoController::class, "app"])->name("app");
Route::get("/quienes", [AtoController::class, "quienes"])->name("quienes");
Route::get("/vision", [AtoController::class, "vision"])->name("vision");
Route::get("/mision", [AtoController::class, "mision"])->name("mision");
Route::get("/inicio", [AtoController::class, "inicio"])->name("inicio");
