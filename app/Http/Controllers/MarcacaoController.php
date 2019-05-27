<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use App\Models\Cliente;
use App\Models\Funcionario;
use App\Models\Marcacoes;
use Illuminate\Http\Request;

class MarcacaoController extends Controller{
    //
    public function abrirCadastrar(){
        return view("cadastrarMarcacao", ['listaFuncionario'=>Funcionario::all(), 'listaCliente'=>Cliente::all(), 'listaServico'=>Servico::all(), 'marcacao'=>new Marcacoes]);
    }

    public function abrirPaginaPrincipal(){
        return view("menuPrincipal");
    }
    
    public function abrirListarMarcacao(){
        return view("visualizarMarcacao", ['listaMarcacao'=>Marcacoes::all(),]);
    }
    
    public function listar() {
        return view("menuPrincipal",['listaMarcacao'=>Marcacoes::all()]);
    }
}
