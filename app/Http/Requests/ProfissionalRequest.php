<?php

namespace pgea\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfissionalRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3',
            'cpf' => 'required|max:14',
            'rg' => 'required|max:11',
            'email' => 'required|max:50',
            'logradouro' => 'required|min:3',
            'numero' => 'required|max:5',
            'bairro' => 'required|min:3',
            'cidade' => 'required|min:3',
            'telefone' => 'required|max:11'

        ];
    }
    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatório!'
        ];
    }
}
