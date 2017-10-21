<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterandoTabelaExtensao extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('extensoes', function (Blueprint $table) {

            $table->time('carga_horaria');
            $table->string('periodo');
            $table->integer('vagas');
            $table->string('resumo');
            $table->string('palavra_chave', 100);
            $table->string('anexo');

            $table->unsignedInteger('curso1_id');
            $table->foreign('curso1_id')->references('id')->on('cursos');

            $table->unsignedInteger('curso2_id');
            $table->foreign('curso2_id')->references('id')->on('cursos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

}
