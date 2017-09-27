<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    public function curso(){
        return $this->hasMany('pgea\extensao');
    }
}
