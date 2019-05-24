<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Funcionario;

class LoginController extends Controller
{
    public function abrirLogin(){
        return view('login');
    }
        
        public function logar(Request $request) {
            $funcionario = Funcionario::where('login',$request->login)->where('senha',$request->senha)->first();
            if($funcionario != null){
                session(['funcId'=>$funcionario->id,'funcNome'=>$funcionario->nome]);
                return redirect()->route('principal');
            }
            return redirect()->route('login')->with('erro', 'Senha ou Login incorreto!');
            //$request->session()->flush() APAGAR TUDO DA SESSION
            //$request->session()->forget(*CAMPO*) APAGAR UM CAMPO DA SESSION 
        }
    }
    