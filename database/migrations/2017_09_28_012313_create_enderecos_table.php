<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEnderecosTable extends Migration
{

    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('logradouro');
            $table->char('numero', '5');
            $table->string('complemento');
            $table->string('bairro');
            $table->string('cidade');

            $table->unsignedInteger('estado_id');
            $table->foreign('estado_id')->references('id')->on('estados');

            $table->string('telefone1', 10);
            $table->string('telefone2', 10);
            $table->string('cpe', 8);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
