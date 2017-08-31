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
            'cpf' => 'required|max:11',
            'rg' => 'required|max:11',
            'sexo' => 'required|in:M,F'

        ];
    }
    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatório!'
        ];
    }
}
