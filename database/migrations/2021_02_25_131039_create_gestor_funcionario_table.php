<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGestorFuncionarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gestor_funcionario', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('nome_completo_gestor');
			$table->string('email_gestor');
			$table->string('nome_completo_funcionario');
			$table->string('email_funcionario');
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
        Schema::dropIfExists('gestor_funcionario');
    }
}
