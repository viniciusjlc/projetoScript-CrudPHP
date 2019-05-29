<?php

namespace App\Models;

use App\Models\Funcionario;
use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $guarded = [];
    
    
    public function funcionarios(){
        return $this->hasMany('App\Models\Funcionario', 'codCategoria', 'codCategoria');
    }
    
    public function categoria(){
        return $this->belongsTo('App\Models\Categoria','codCategoria');
    }
}
