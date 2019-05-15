<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FuncionarioController extends Controller
{
    //

    public function abrirCadastrar(){
        return view("cadastrarFuncionario");
    }
    
    public function abrirListarFuncionario() {
        // $dados['clientes'] = [
        //     ['id' => 1, 'nome' => 'Cliente 1', 'email' => 'teste@gmail.com', 'telefone' => '111111111',  'sexo' => 1, 'idade' => '18'],
        //     ['id' => 2, 'nome' => 'Cliente 2', 'email' => 'gteste@mail.com', 'telefone' => '999999999',  'sexo' => 2, 'idade' => '21'],    
        // ];
        // return view('visualizarFuncionario', $dados);
        return view("visualizarFuncionario");
    }

    public function novo(Request $request){
        $request->validate([
             'nome'   => 'required',
             'cpf'   => 'required',
             'email'   => 'required',
             'confirmarEmail' => 'required',
             'telefone'   => 'required|integer',
             'sexo'   => 'required',
             'idade'   => 'required|integer',
             'senha'   => 'required',
             'confirmarSenha' => 'required'
        ]);

        if($request->email!=$request->confirmarEmail){
            return redirect()->route('funcionario.cadastrar')->with('erro', 'Confirme seu email corretamente');
        }

        if($request->senha!=$request->confirmarSenha){
            return redirect()->route('funcionario.cadastrar')->with('erro', 'Confirme sua senha corretamente');
        }

        $Funcionario = new Funcionario;
        $Funcionario->nome = $request->nome;
        $Funcionario->cpf = $request->cpf;
        $Funcionario->email = $request->email;
        $Funcionario->telefone = $request->telefone;
        $Funcionario->sexo = $request->sexo;
        $Funcionario->idade = $request->idade;
        $Funcionario->senha = $request->senha;
        
        echo "Passou";
    }
}
