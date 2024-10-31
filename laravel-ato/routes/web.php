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

Route::get("/login", [AtoController::class, "login"])->name("login");
Route::get("/register", [AtoController::class, "register"])->name("register");

// POST
Route::post("/login", [AuthController::class, "login"])->name("login");
