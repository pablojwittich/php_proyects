<?php

use App\Http\Controllers\OrdenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[OrdenController::class,'index'])->name('index');
Route::get('/beneficio',[OrdenController::class,'viewBeneficio'])->name('beneficio');
Route::get('/nuevosClientes',[OrdenController::class, 'nuevosClientes'])->name('nuevosClientes');
Route::post('/saveCLiente',[OrdenController::class, 'saveCliente'])->name('saveCliente');