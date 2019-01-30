<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FabricanteRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|max:80|unique:fabricantes'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del fabricante es un dato obligatorio.',
            'nombre.max'      => 'El nombre del fabricante debe tener como máximo :max caracteres.',
            'nombre.unique'   => 'El fabricante indicado ya existe en la base de datos'
        ];
    }
}
