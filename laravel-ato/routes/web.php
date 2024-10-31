<?php

use App\Http\Controllers\AtoController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// GET
Route::get("/", [AtoController::class, "index"])->name("index");
Route::get("/app", [AtoController::class, "app"])->name("app");
Route::get("/quienes", [AtoController::class, "quienes"])->name("quienes");
Route::get("/vision", [AtoController::class, "vision"])->name("vision");
Route::get("/mision", [AtoController::class, "mision"])->name("mision");

Route::get("/login", [AuthController::class, "login"])->name("login");
Route::get("/register", [AuthController::class, "register"])->name("register");
