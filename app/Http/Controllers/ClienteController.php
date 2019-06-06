<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;
use App\Models\Marcacoes;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    
    public function abrirCadastrar(){
        return view("cadastrarCliente",[
            'cliente'=>new Cliente
            ]);
        }
        
        public function abrirListarCliente() {
            return view('visualizarCliente', ['listaCliente'=>Cliente::all()]);
        }
        
        public function abrirAlterar($id){
            return view("alterarCliente",[
                'cliente'=>Cliente::findOrfail($id)
                ]);
            }
            
            public function excluir($id){
                DB::table('marcacoes')->where('codCliente', $id)->delete();
                Cliente::destroy($id);
                return redirect()->route('cliente')->with("msg", "Cliente excluido com sucesso!");
            }
            
            public function validarCliente(Request $request){
                $request->validate([
                    'nome'   => 'required',
                    'cpf'   => 'required',
                    'telefone'   => 'required',
                    'sexo'   => 'required',
                    'idade'   => 'required|integer'
                    ]  );
                }
                
                public function novo(Request $request){
                    $this->validarCliente($request);
                    $dados = $request->except('_token');
                    $dados['telefone'] = str_replace('-', '', $dados['telefone']);
                    $dados['cpf'] = str_replace('-', '', $dados['cpf']);
                    $dados['cpf'] = str_replace('.', '', $dados['cpf']);
                    Cliente::create($dados);
                    return redirect()->route('cliente');
                }
                
                public function alterar(Request $request, $id){
                    $this->validarCliente($request);
                    $dados = $request->except('_token');
                    $dados['telefone'] = str_replace('-', '', $dados['telefone']);
                    $dados['cpf'] = str_replace('-', '', $dados['cpf']);
                    $dados['cpf'] = str_replace('.', '', $dados['cpf']);
                    Cliente::where('id',$id)->update($dados);
                    return redirect()->route('cliente');
                }
                
            }
            