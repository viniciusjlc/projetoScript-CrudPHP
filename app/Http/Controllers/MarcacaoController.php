<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcacaoController extends Controller{
    //
    public function abrirPaginaPrincipal(){
        return view("menuPrincipal");
    }
    
    public function abrirListarMarcacao(){
        return view("visualizarMarcacao");
    }
    
    public function listar() {
        $dados['marcacoes'] = [
            ['id' => 1, 'cliente' => 'Cliente 1', 'telefone' => '111111111', 'servico' => 'Servico 1', 'horario' => '12:01', 'dia' => '01/01/2019', 'funcionario' => 'Funcionario 1'],
            ['id' => 2, 'cliente' => 'Cliente 2', 'telefone' => '222222222', 'servico' => 'Servico 2', 'horario' => '12:02', 'dia' => '02/02/2019', 'funcionario' => 'Funcionario 2']
        ];
        return view('menuPrincipal', $dados);
    }
}
