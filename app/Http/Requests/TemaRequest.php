<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TemaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|max:40|unique:temas'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del tema es un dato obligatorio.',
            'nombre.max'      => 'El nombre del tema debe tener como máximo :max caracteres.',
            'nombre.unique'   => 'El tema indicado ya existe en la base de datos'
        ];
    }  
}
