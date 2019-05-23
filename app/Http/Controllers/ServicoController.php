<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Servico;
use Illuminate\Http\Request;

class ServicoController extends Controller
{
    //
    public function abrirCadastrar(){
        return view("cadastrarServico", ['listaCategoria'=>Categoria::all(), 'servico'=>new Servico]);
    }
    
    public function abrirListarServico() {
        return view("visualizarServico",['listaServico'=>Servico::all()]);
    }
    
    public function abrirAlterar($id){
        return view("alterarServico",[
            'servico'=>Servico::findOrfail($id),
            'listaCategoria'=>Categoria::all()]);
        }
        
        public function alterar(Request $request, $id){
            $this->validarServico($request);
            Servico::where('id',$id)->update($request->except('_token'));
            return redirect()->route('servico');
        }
        
        public function excluir($id){
            Servico::destroy($id);
            return redirect()->route('servico')->with("msg", "Serviço excluido com sucesso!");
        }
        
        public function novo(Request $request){
            $request->validate([
                'nome'   => 'required',
                'preco'   => 'required|numeric',
                'comissao'   => 'required',
                'descricao'   => 'required'
                ]);
                
                Servico::create($request->except(['_token']));
                
                return redirect()->route('servico');
            }
        }
        