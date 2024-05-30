<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){

        return view('cliente/index');

    }

    public function CadastroCliente(){
        return view('cadastrar/cliente');
    }

    public function mostrarCliente(){
        return view('Cliente/mostrar');
    }

    //salvar no banco de dados
    public function storeCliente(ClienteRequest $request){
        $request->validated();

        //salvar no banco de dados
        Cliente::create($request->all());

        redirect()->route('mostrar.cliente')->with('Sucesso', 'Cliente cadastrado com sucesso');

    }
}
