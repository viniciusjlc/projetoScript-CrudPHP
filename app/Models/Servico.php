<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servico extends Model
{
    //
    protected $guarded = [];

    public function categoria(){
        return $this->belongsTo('App\Models\Categoria','codCategoria');
    }
}
