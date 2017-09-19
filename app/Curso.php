<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table = "curso";

    public function curso(){
       return $this->hasMany('pgea\Extensao');
    }
}
