<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function extensao(){
        return $this->hasMany('pgea\Extensao');
    }

}
