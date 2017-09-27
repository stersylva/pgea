<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Extensao extends Model
{
    protected $table = "extensoes";

    protected $fillable =
        array('curso_id', 'titulo', 'edital', 'data_inicio', 'data_termino', 'categoria_id');

    public function curso(){
        return $this->belongsTo('pgea\Curso');
    }
    public function categoria(){
        return $this->belongsTo('pgea\Categoria');
    }
}
