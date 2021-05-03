<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionario', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->unsignedBigInteger('unidade_id');
            $table->foreign('unidade_id')->references('id')->on('unidade');
			$table->unsignedBigInteger('cargo');
            $table->foreign('cargo')->references('id')->on('cargos');
			$table->string('nome_completo');
			$table->string('matricula');
			$table->string('cpf');
			$table->string('telefone');
			$table->string('atividades');
			$table->string('declaracao');
			$table->string('email');
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
        Schema::dropIfExists('funcionario');
    }
}
