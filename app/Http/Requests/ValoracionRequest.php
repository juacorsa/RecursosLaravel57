<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValoracionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|max:20|unique:valoraciones'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la valoración es un dato obligatorio.',
            'nombre.max'      => 'El nombre de la valoración debe tener como máximo :max caracteres.',
            'nombre.unique'   => 'La valoración indicada ya existe en la base de datos'
        ];
    }
}
