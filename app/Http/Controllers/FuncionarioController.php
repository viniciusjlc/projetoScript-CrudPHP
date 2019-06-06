<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Funcionario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FuncionarioController extends Controller
{
    //
    
    public function abrirCadastrar(){
        return view("cadastrarFuncionario", ['listaCategoria'=>Categoria::all(), 'funcionario'=>new Funcionario]);
    }
    
    public function abrirListarFuncionario() {
        return view("visualizarFuncionario", ['listaFuncionario'=>Funcionario::all()]);
    }
    
    public function abrirAlterar($id){
        return view("alterarFuncionario",[
            'funcionario'=>Funcionario::findOrfail($id),
            'listaCategoria'=>Categoria::all()]);
        }
        
        public function alterar(Request $request, $id){
            $this->validarFuncionario($request);
            $dados = $request->except(['confirmarEmail','confirmarSenha','_token']);
            $dados['telefone'] = str_replace('-', '', $dados['telefone']);
            $dados['cpf'] = str_replace('-', '', $dados['cpf']);
            $dados['cpf'] = str_replace('.', '', $dados['cpf']);
            Funcionario::where('id',$id)->update($dados);
            return redirect()->route('funcionario');
        }
        
        public function excluir($id){
            DB::table('marcacoes')->where('codFuncionario', $id)->delete();
            Funcionario::destroy($id);
            return redirect()->route('funcionario')->with("msg", "Funcionário excluido com sucesso!");
        }
        
        public function novo(Request $request){
            $this->validarFuncionario($request);
            $dados = $request->except(['confirmarEmail','confirmarSenha','_token']);
            $dados['telefone'] = str_replace('-', '', $dados['telefone']);
            $dados['cpf'] = str_replace('-', '', $dados['cpf']);
            $dados['cpf'] = str_replace('.', '', $dados['cpf']);
            Funcionario::create($dados);
            return redirect()->route('funcionario');
        }
        
        public function validarFuncionario(Request $request){
            $request->validate([
                'nome'  => 'required',
                'cpf'   => 'required',
                'email' =>  'required',
                'confirmarEmail' => [function ($att, $value, $fail) use ($request) {
                    if($value != $request->email) $fail('Confirme seu email corretamente');
                }],
                'telefone'   => 'required',
                'sexo'       => 'required',
                'idade'   => 'required|integer',
                'senha'   => 'required',
                'endereco' => 'required',
                'confirmarSenha' => [function ($att, $value, $fail) use ($request) {
                    if($value != $request->senha) $fail('Confirme sua senha corretamente');
                }]
                ]);
            }
            
        }
        