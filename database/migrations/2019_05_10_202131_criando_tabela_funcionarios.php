<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaFuncionarios extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('matricula', 10);
            $table->string('login', 40);
            $table->string('senha', 10);
            $table->string('nome', 100);
            $table->string('email', 60);
            $table->string('endereco', 100);
            $table->string('cpf', 11);
            $table->integer('idade');
            $table->enum('sexo', ['M', 'F']);
            $table->String('telefone', 9);
            $table->integer('codCategoria');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('funcionarios');
    }
}
