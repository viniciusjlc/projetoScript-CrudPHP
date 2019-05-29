<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marcacoes extends Model
{
    //
    protected $guarded = [];

    public function funcionario(){
        return $this->belongsTo('App\Models\Funcionario','codFuncionario');
    }
    public function cliente(){
        return $this->belongsTo('App\Models\Cliente','codCliente');
    }
    public function servico(){
        return $this->belongsTo('App\Models\Servico','codServico');
    }
}
