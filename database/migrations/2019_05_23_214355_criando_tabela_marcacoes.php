<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoTabelaMarcacoes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marcacoes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->time('horario');
            $table->date('data');
            $table->integer('codCliente');
            $table->integer('codServico');
            $table->integer('codFuncionario');
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
        Schema::dropIfExists('marcacoes');
    }
}
