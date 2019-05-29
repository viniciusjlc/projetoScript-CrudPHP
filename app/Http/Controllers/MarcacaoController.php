<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Marcacoes;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MarcacaoController extends Controller{
    //
    public function abrirCadastrar(){
        return view("cadastrarMarcacao", ['listaFuncionario'=>Funcionario::all(), 'listaCliente'=>Cliente::all(), 'listaServico'=>Servico::all(), 'marcacao'=>new Marcacoes]);
    }
    
    public function abrirPaginaPrincipal(){
        return view("menuPrincipal");
    }
    
    public function listar() {
        return view("menuPrincipal",['listaMarcacao'=>Marcacoes::all()]);
    }
    
    public function abrirListarMarcacao(){
        return view("visualizarMarcacao", ['listaMarcacao'=>Marcacoes::all()]);
    }
    
    public function excluir($id){
        Marcacoes::destroy($id);
        return redirect()->route('marcacao')->with("msg", "Marcação excluido com sucesso!");
    }
    
    public function abrirAlterar($id){
        return view("alterarMarcacao",[
            'marcacao'=>Marcacoes::findOrfail($id),'listaFuncionario'=>Funcionario::all(), 'listaCliente'=>Cliente::all(), 'listaServico'=>Servico::all()
            ]);
        }
        
        public function validarMarcacao(Request $request){
            $request->validate([
                'data'   => 'required',
                'horario'   => 'required'
                ]);  
            }
            
            public function novo(Request $request){
                $this->validarMarcacao($request);
                Marcacoes::create($request->except(['_token']));
                return redirect()->route('marcacao');
            }
            
            public function alterar(Request $request, $id){
                $this->validarMarcacao($request);
                Marcacoes::where('id',$id)->update($request->except('_token'));
                return redirect()->route('marcacao');
            }
            
            public function buscarFuncionario($id){
                $servicoFind = Servico::find($id); 
                $users = DB::table('funcionarios')
                ->join('servicos', 'funcionarios.codCategoria', '=', 'servicos.codCategoria')
                ->where('servicos.id',  $id)
                ->select('funcionarios.*')
                ->get();
                return response()->json($users);
            }
            
        }
        