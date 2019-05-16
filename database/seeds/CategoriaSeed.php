<?php

use Illuminate\Database\Seeder;
use App\Models\Categoria;
class CategoriaSeed extends Seeder
{
    /**
    * Run the database seeds.
    *
    * @return void
    */
    public function run()
    {
        //
        Categoria::create(['descricao' => 'Corte']);
        Categoria::create(['descricao' => 'Pintura']);
        Categoria::create(['descricao' => 'Penteado']);
        Categoria::create(['descricao' => 'Tratamento Capilar']);
        Categoria::create(['descricao' => 'Barba']);
        Categoria::create(['descricao' => 'Manicure']);
        Categoria::create(['descricao' => 'Pedicure']);
        Categoria::create(['descricao' => 'Dermatologia']);
        Categoria::create(['descricao' => 'Penteado']);
        Categoria::create(['descricao' => 'Maquiagem']);
        Categoria::create(['descricao' => 'Depilação']);
        Categoria::create(['descricao' => 'Massagem']);
    }
}
