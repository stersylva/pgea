<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicioanaRelacionamentoExtensaoCurso extends Migration
{

    public function up()
    {
        schema::table('extensao', function (Blueprint $table)
        {
            $table->integer('curso_id');
        });
    }

    public function down()
    {
        schema::table('extensao', function (Blueprint $table)
        {
            $table->dropColumn('curso_id');
        });

    }
}
