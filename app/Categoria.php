<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function extensoes(){
        return $this->hasMany('pgea\Extensao');
    }
}
