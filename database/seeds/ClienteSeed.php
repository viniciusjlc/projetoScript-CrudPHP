<?php

use Illuminate\Database\Seeder;
use App\Models\Cliente;

class ClienteSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  
        Cliente::create(['nome' => 'Vinicius', 'email' => 'vinicius@gmail.com.br', 'endereco' => 'AV Jorge de Lima, 444','cpf' => '99911199911', 'idade' => '20','sexo' => 'M','telefone' => '987654321','padraoCabelo' => 'Baixo, preto','padraoVisual' => 'Pouca barba']);
        Cliente::create(['nome' => 'Carlos', 'email' => 'carloswgama@hotmail.com.br', 'endereco' => 'Rua do Carlos, 28','cpf' => '88877766622', 'idade' => '26','sexo' => 'M','telefone' => '123456789','padraoCabelo' => 'Careca','padraoVisual' => 'Bigode']);
        Cliente::create(['nome' => 'Isis', 'email' => 'isislima@gmail.com.br', 'endereco' => 'Longe','cpf' => '14187890921', 'idade' => '19','sexo' => 'F','telefone' => '777213421','padraoCabelo' => 'Longo, castranho escuro','padraoVisual' => 'Unha vermelhas']);
        Cliente::create(['nome' => 'Maria', 'email' => 'maria@jose.com.br', 'endereco' => 'Rua São José, 981','cpf' => '12332112388', 'idade' => '40','sexo' => 'F','telefone' => '777777888','padraoCabelo' => 'Loiro longo, liso e cacheado nas pontas','padraoVisual' => 'Unhas do pé e da mão rosas']);
        Cliente::create(['nome' => 'José', 'email' => 'jose@maria.com.br', 'endereco' => 'Rua Virgem Maria, 189','cpf' => '88321123321', 'idade' => '21','sexo' => 'M','telefone' => '888777777','padraoCabelo' => 'Médio ruivo','padraoVisual' => 'Sem barba, sobrancelha feita na pinça']);
    }
}
