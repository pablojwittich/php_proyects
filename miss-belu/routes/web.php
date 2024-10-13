<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MissController;

//GET
Route::get("/", [MissController::class, "index"])->name("index");
Route::get("/app", [MissController::class, "app"])->name("app");
Route::get("/sobreMi", [MissController::class, "sobreMi"])->name("sobreMi");
Route::get("/misCursos", [MissController::class, "misCursos"])->name("misCursos");
Route::get("/contactame", [MissController::class, "contactame"])->name("contactame");
