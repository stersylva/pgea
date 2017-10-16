<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Estado extends Model
{
    public function estados(){
        return $this->hasMany('pgea\endereco');
    }
}
