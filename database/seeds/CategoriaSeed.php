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
    }
}
