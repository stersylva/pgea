<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model

{

    protected $fillable =
        array('logradouro', 'numero', 'complemento', 'bairro', 'cidade', 'estado_id', 'telefone1', 'telefone2', 'cep');

    public function estado(){
        return $this->belongsTo('pgea\Estado');
    }
}
