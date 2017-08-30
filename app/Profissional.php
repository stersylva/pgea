<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissional";
    //public $timestamps = false;

    protected $fillable =
        array('nome', 'cpf', 'rg', 'codigo', 'email', 'sexo', 'datanasci', 'tributacaoid');
}
