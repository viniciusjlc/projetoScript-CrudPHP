<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CaixaController extends Controller
{
    //
    public function abrirCaixa() {
        return view('caixa');
    }

    public function abrirEstoque() {
        return view('estoque');
    }

    public function abrirVendas() {
        return view('visualizarVendas');
    }
}
