<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function abrirLogin(){
        return view('login');
    }

    // public function logar(){
    //    return view('menu');
    //}

    public function logar(Request $request) {
        if($request->email=='teste@teste.com' && $request->senha=='123'){
            return redirect()->route('principal');
        }else{
            return redirect()->route('login')->with('erro', 'Senha ou Login incorreto!');
        }
    }
}
