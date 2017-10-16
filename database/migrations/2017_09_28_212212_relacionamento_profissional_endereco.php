<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelacionamentoProfissionalEndereco extends Migration
{

    public function up()
    {
        Schema::table('profissionais', function (Blueprint $table)
        {
            $table->unsignedInteger('endereco_id');
            $table->foreign('endereco_id')->references('id')->on('enderecos');

        });
    }


    public function down()
    {
        Schema::table('profissionais', function(Blueprint $table)
        {
            $table->dropColumn('endereco_id'); //apaga o campo
        });
    }
}
