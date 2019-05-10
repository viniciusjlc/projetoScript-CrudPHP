<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    //
    public function abrirCadastrarCliente(){
        return view("cadastrarCliente");
    }
    
    public function listarCliente() {
        $dados['clientes'] = [
            ['id' => 1, 'nome' => 'Cliente 1', 'email' => 'teste@gmail.com', 'telefone' => '111111111',  'sexo' => 1, 'idade' => '18'],
            ['id' => 2, 'nome' => 'Cliente 2', 'email' => 'gteste@mail.com', 'telefone' => '999999999',  'sexo' => 2, 'idade' => '21'],    
        ];
        return view('visualizarCliente', $dados);
    }

    public function novo(Request $request){
        $request->validate([
            'nome'   => 'required',
            'email'   => 'required',
            'telefone'   => 'required|integer',
            'sexo'   => 'required',
            'idade'   => 'required|integer'
        ]  );
        echo "Passou";
    }
}
