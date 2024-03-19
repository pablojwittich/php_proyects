<?php

use App\Http\Controllers\ControllerOrder;
use Illuminate\Support\Facades\Route;

Route::get('/',[ControllerOrder::class,'index']);