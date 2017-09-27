<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais";

    protected $fillable =
        array('nome', 'cpf', 'codigo', 'email', 'sexo', 'data_de_nacimento', 'titulacao_id');

    public function titulacao(){
        return $this->belongsTo('pgea\Curso');
    }

}
