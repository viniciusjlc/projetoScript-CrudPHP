<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller
{
    
    public function abrirCadastrar(){
        return view("cadastrarCliente");
    }
    
    public function abrirListarCliente() {
        return view('visualizarCliente', ['listaCliente'=>Cliente::all()]);
    }
    
    public function excluir($id){
        Cliente::destroy($id);
        return redirect()->route('cliente')->with("msg", "Cliente excluido com sucesso!");
    }
    
    public function novo(Request $request){
        $request->validate([
            'nome'   => 'required',
            'cpf'   => 'required',
            'telefone'   => 'required|integer',
            'sexo'   => 'required',
            'idade'   => 'required|integer'
            ]  );
            
            $Cliente = new Cliente;
            $Cliente->nome = $request->nome;
            $Cliente->cpf = $request->cpf;
            $Cliente->email = $request->email;
            $Cliente->telefone = $request->telefone;
            $Cliente->sexo = $request->sexo;
            $Cliente->idade = $request->idade;
            $Cliente->endereco = $request->endereco;
            $Cliente->padraoCabelo = $request->padraoCabelo;
            $Cliente->padraoVisual = $request->padraoVisual;
            $Cliente->save();
            
            return redirect()->route('cliente');
        }
    }
    