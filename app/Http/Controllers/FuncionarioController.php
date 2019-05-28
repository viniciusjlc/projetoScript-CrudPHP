<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Funcionario;
use Illuminate\Http\Request;

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
            Funcionario::where('id',$id)->update($request->except(['confirmarEmail','confirmarSenha','_token']));;
            return redirect()->route('funcionario');
        }
        
        public function excluir($id){
            $this->Funcionario::destroy($id);
            return redirect()->route('funcionario')->with("msg", "Funcionário excluido com sucesso!");
        }
        
        public function novo(Request $request){
            $this->validarFuncionario($request);
            Funcionario::create($request->except(['confirmarEmail','confirmarSenha','_token']));
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
                'telefone'   => 'required|integer',
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
        