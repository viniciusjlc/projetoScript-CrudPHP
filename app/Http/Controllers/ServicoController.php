<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //
    public function abrirCadastrar(){
        return view("cadastrarServico");
    }
    
    public function abrirListarServico() {
        // $dados['clientes'] = [
        //     ['id' => 1, 'nome' => 'Cliente 1', 'email' => 'teste@gmail.com', 'telefone' => '111111111',  'sexo' => 1, 'idade' => '18'],
        //     ['id' => 2, 'nome' => 'Cliente 2', 'email' => 'gteste@mail.com', 'telefone' => '999999999',  'sexo' => 2, 'idade' => '21'],    
        // ];
        // return view('visualizarFuncionario', $dados);
        return view("visualizarServico");
    }

    public function novo(Request $request){
        $request->validate([
             'nome'   => 'required',
             'preco'   => 'required|float',
             'comissao'   => 'required',
             'descricao'   => 'required'
             
        ]);
        echo "Passou";
    }
}
