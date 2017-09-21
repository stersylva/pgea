<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriandoOForenkeyCursoId extends Migration
{

    public function up()
    {
        Schema::table('extensao', function (Blueprint $table) {
            $table->foreign('cursoid')->references('id')->on('curso')->onDelete('cascade');
        });
    }


    public function down()
    {
        Schema::table('extensao', function (Blueprint $table) {
            $table->dropForeign('[cursoid]');
        });
    }
}
