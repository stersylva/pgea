<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class EnderecoIdProfissional extends Migration
{

    public function up()
    {
        Schema::table('profissional', function ($table){
            $table->integer('endereco_id');
        });
    }


    public function down()
    {
        Schema::table('profissional', function ($table){
            $table->dropColumn('endereco_id');
        });
    }
}
