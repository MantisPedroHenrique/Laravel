<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(){
        $cliente = Cliente::orderByDesc('created_at')->get();
        return view('cliente/index', ['cliente'=> $cliente]);

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

    // vizualizar os dados a partir do id o cliente
    public function editarCliente(cliente $cliente){
        return view('editar/cliente', ['cliente' => $cliente]);
    }

    //public function updateCliente(){
       //dd('atualizar');
    //}

}
