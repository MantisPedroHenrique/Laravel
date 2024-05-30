<?php

use App\Http\Controllers\CadastroCliente;
use App\Http\Controllers\ClienteController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// rota index do cliente
 Route::get('/index/cliente', [ClienteController::class,'index'])->name('index.cliente');

 // formulario de criação
 Route::get('/cadastrar/cliente', [ClienteController::class,'CadastroCliente'])->name('cadastrar.cliente');

 // mostrar resultado
 Route::get('/mostrar/cliente', [ClienteController::class,'mostrarCliente'])->name('mostrar.cliente');

// salvar no banco de dados
 Route::post('/store/cliente', [ClienteController::class,'storeCliente'])->name('store.cliente');
