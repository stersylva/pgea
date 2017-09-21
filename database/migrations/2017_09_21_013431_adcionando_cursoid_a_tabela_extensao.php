<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdcionandoCursoidATabelaExtensao extends Migration
{

    public function up()
    {
        Schema::table('extensao', function (Blueprint $table)
        {
            $table->integer('cursoid');



        });
    }


    public function down()
    {
        Schema::table('extensao', function (Blueprint $table)
        {
            $table->dropColumn('cursoid');


        });
    }
}
