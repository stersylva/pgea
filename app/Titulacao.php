<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Titulacao extends Model
{
    protected $table = "titulacoes";

    public function titulacoes(){
        return $this->hasMany('pgea\profissional');
    }
}
