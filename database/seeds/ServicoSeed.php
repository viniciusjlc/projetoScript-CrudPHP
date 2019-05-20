<?php

use Illuminate\Database\Seeder;
use App\Models\Servico;

class ServicoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Servico::create(['nome' => 'Corte Militar','codCategoria' => '1', 'comissao' => '10', 'preco' => '15', 'descricao' => 'Corte de maquina dois encima e um nos lados, com pé feito bem marcado']);
        Servico::create(['nome' => 'Pintura Completa','codCategoria' => '2', 'comissao' => '20', 'preco' => '60', 'descricao' => 'Um tramamento básico do cabelo e pintura completa']);
        
    }
}
