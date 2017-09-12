<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCursoTable extends Migration
{
    public function up()
    {
       Schema::create('curso', function(Blueprint $table)
       {
           $table->increments('id');
           $table->string('nome');

       });
    }


    public function down()
    {
        Schema::drop('curso');
    }
}
