<?php

use Illuminate\Database\Seeder;
use App\Models\Marcacao;

class MarcacaoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Servico::create(['horario' => '12:00','data' => '01-01-2001', 'codCliente' => '3', 'codServico' => '3', 'codFuncionario' => '3','status' => 'Marcado']);
        
            //'status': 'Marcado', 'Executando', 'Finalizado', 'Cancelado'
    }
}
