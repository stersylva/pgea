<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfissionaisTable extends Migration
{

    public function up()
    {
        Schema::create('profissionais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->char('cpf', 11)->unique();
            $table->char('rg', 15)->unique();
            $table->char('codigo', 10);
            $table->string('email', 100)->unique();
            $table->enum('sexo', ['F', 'M']);
            $table->date('data_nascimento');

            $table->unsignedInteger('titulacao_id');
            $table->foreign('titulacao_id')->references('id')->on('titulacoes');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('profissionais');
    }
}
