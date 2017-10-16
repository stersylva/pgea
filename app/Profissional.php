<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais";

    protected $fillable =
        array('cpf', 'rg', 'codigo', 'email', 'data_de_nacimento', 'titulacao_id', 'endereco_id');

    public function titulacao(){
        return $this->belongsTo('pgea\Titulacao');
    }

    public function endereco(){
        return $this->belongsTo('pgea\Endereco');
    }
}
