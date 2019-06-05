<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OutrosController extends Controller
{
    //
    public function logout(Request $request) {
        $request->session()->flush();
        return redirect()->route('login')->with('erro', 'Sessão finalizada!');
    }
}
