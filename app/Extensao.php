<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Extensao extends Model
{
    protected $table = "extensao";

    public $timestamps = false;

    protected $fillable =
        array('titulo', 'edital', 'datainicio', 'datatermino', 'cursoid');

    public function curso(){
       return $this->belongsTo('pgea\Curso');
    }

}
