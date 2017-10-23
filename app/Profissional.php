<?php

namespace pgea;

use Illuminate\Database\Eloquent\Model;

class Profissional extends Model
{
    protected $table = "profissionais";

    protected $fillable =
        ['nome', 'cpf', 'rg', 'codigo', 'email', 'data_de_nacimento', 'titulacao_id', 'endereco_id'];

    Protected $guarded = ['id', 'created_at', 'update_at'];

    public function titulacao(){
        return $this->belongsTo('pgea\Titulacao');
    }

    public function endereco(){
        return $this->belongsTo('pgea\Endereco');
    }
}
