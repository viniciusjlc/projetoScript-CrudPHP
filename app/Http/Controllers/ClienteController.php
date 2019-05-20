<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

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
            
            public function alterar(Request $request, $id){
                $this->validarCliente($request);
                Cliente::where('id',$id)->update($request->except('_token'));
                return redirect()->route('cliente');
            }
            
            public function excluir($id){
                Cliente::destroy($id);
                return redirect()->route('cliente')->with("msg", "Cliente excluido com sucesso!");
            }
            
            public function novo(Request $request){
                $this->validarCliente($request);
                Cliente::create($request->all());
                return redirect()->route('cliente');
            }
            
            public function validarCliente(Request $request){
                $request->validate([
                    'nome'   => 'required',
                    'cpf'   => 'required',
                    'telefone'   => 'required|integer',
                    'sexo'   => 'required',
                    'idade'   => 'required|integer'
                    ]  );
                }
            }
            