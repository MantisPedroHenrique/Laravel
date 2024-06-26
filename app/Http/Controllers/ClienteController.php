<?php

namespace App\Http\Controllers;

use App\Http\Requests\ClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index(Request $request){
        $termoDePesquisa = $request->input("pesquisa");

        $cliente = Cliente::where('name', 'like' , '%'. $termoDePesquisa . '%')
        ->orWhere('cpf', 'like' , '%'. $termoDePesquisa . '%')
        ->orWhere('email' ,'like' , '%'. $termoDePesquisa . '%')
        -> orderByDesc('created_at')
        ->get();
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

        return redirect()->route('mostrar.cliente')->with('Sucesso', 'Cliente cadastrado com sucesso');

    }

    // vizualizar os dados a partir do id o cliente
    public function editarCliente(cliente $cliente){
        return view('editar/cliente', ['cliente' => $cliente]);
    }

    public function updateCliente(ClienteRequest $request, cliente $cliente){
        $request->validated();

        //edita as informações no banco de dados
        $cliente->update([
            'name' => $request->name,
            'cpf' => $request->cpf,
            'email' => $request->email,
            'fone' => $request->fone,
            'nascimento' => $request->nascimento,

         ]);

        return redirect()->route('index.cliente')->with('Sucesso', 'Cliente atualizado com sucesso');
    }
    public function deleteCliente(cliente $cliente){
        $cliente->delete();

        return redirect()->route('index.cliente')->with('Sucesso', 'Cliente excluido com sucesso');
    }

}
