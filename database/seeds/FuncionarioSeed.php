<?php

use Illuminate\Database\Seeder;
use App\Models\Funcionario;

class FuncionarioSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Funcionario::create(['login' => 'teste123','senha' => '123', 'nome' => 'Teste', 'email' => 'teste@teste.com.br', 'endereco' => 'Rua Teste','cpf' => '10020030099', 'idade' => '18','sexo' => 'M','telefone' => '987654321','codCategoria' => '1']);
        Funcionario::create(['login' => 'moon','senha' => 'moon', 'nome' => 'Marc Spector', 'email' => 'marcspector@moon.com.br', 'endereco' => 'AV Lua, 9','cpf' => '98123123123', 'idade' => '54','sexo' => 'M','telefone' => '888881212','codCategoria' => '3']);
        Funcionario::create(['login' => 'luna2704','senha' => '270498', 'nome' => 'Luana Lura Lira', 'email' => 'lllira27@gmail.com.br', 'endereco' => 'Rua Iparibirucasibi, 182','cpf' => '66655544432', 'idade' => '19','sexo' => 'F','telefone' => '999991010','codCategoria' => '8']);
    }
}
