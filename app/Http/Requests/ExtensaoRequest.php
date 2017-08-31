<?php

namespace pgea\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtensaoRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        return [
            'titulo' => 'required|min:3',
            'edital' => 'required|max:100'

        ];
    }
    public function messages()
    {
        return [
            'required' => 'O :attribute é obrigatório!'
        ];
    }
}
