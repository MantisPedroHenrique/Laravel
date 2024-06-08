<?php

use App\Http\Controllers\CadastroCliente;
use App\Http\Controllers\ClienteController;
use app\Models\Cliente;
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

 //vizualizar dados de acordo com id
 Route::get('/editar/cliente/{cliente}', [ClienteController::class,'editarCliente'])->name('editar.cliente');


 Route::put('/update/cliente/{cliente}', [ClienteController::class,'updateCliente'])->name('update.cliente');
