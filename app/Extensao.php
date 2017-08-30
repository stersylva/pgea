<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Extensao extends Model
{
    protected $table = "extensao";
   // public $timestamps = false;

    protected $fillable =
        array('titulo', 'edital', 'cursoid', 'datainicio', 'datatermino');

}
