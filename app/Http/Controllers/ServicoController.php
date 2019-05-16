<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //
    public function abrirCadastrar(){
        return view("cadastrarServico", ['listaCategoria'=>Categoria::all()]);
    }
    
    public function abrirListarServico() {
        return view("visualizarServico",['listaServico'=>Servico::all()]);
    }
    
    public function novo(Request $request){
        $request->validate([
            'nome'   => 'required',
            'preco'   => 'required|numeric',
            'comissao'   => 'required',
            'descricao'   => 'required'
            ]);
            
            $Servico = new Servico;
            $Servico->nome = $request->nome;
            $Servico->preco = $request->preco;
            $Servico->comissao = $request->comissao;
            $Servico->descricao = $request->descricao;
            $Servico->codCategoria = $request->codCategoria;
            $Servico->save();

            return redirect()->route('servico');
        }
    }
    