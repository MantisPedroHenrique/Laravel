<?php

use App\Http\Controllers\MS\MsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/clientes', [MsController::class,'clientes']);
