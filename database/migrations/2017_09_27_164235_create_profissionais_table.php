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
            $table->increments('id');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('profissionals');
    }
}
