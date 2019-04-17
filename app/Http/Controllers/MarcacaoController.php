<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarcacaoController extends Controller
{
    //
    public function abrirPaginaPrincipal(){
        return view("menuPrincipal");
    }

    public function abrirPaginaMarcacao(){
        return view("marcacao");
    }
}
