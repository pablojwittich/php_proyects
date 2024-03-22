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
//Get
Route::get('/',[OrdenController::class,'index'])->name('index');
Route::get('/beneficio',[OrdenController::class,'viewBeneficio'])->name('beneficio');
Route::get('/nuevosClientes',[OrdenController::class, 'nuevosClientes'])->name('nuevosClientes');
Route::get('/nuevosBenef', [OrdenController::class, 'nuevosBenef'])->name('nuevosBenef');
Route::get('/viewUser{id}', [OrdenController::class, 'viewUser'])->name('viewUser');
Route::get('/verQr{id}', [OrdenController::class, 'verQr'])->name('verQr');

//Post
Route::post('/saveCLiente',[OrdenController::class, 'saveCliente'])->name('saveCliente');
Route::post('/saveBenef', [OrdenController::class, 'saveBenef'])->name('saveBenef');

Route::get('/ordenes/{id}/edit', [OrdenController::class, 'edit'])->name('editOrden');

// Ruta para manejar la actualización de orden
Route::put('/updateOrden{id}', [OrdenController::class, 'updateClient'])->name('updateOrden');


