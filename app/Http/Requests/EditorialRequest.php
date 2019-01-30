<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditorialRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nombre' => 'required|max:80|unique:editoriales'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre de la editorial es un dato obligatorio.',
            'nombre.max'      => 'El nombre de la editorial debe tener como máximo :max caracteres.',
            'nombre.unique'   => 'La editorial indicada ya existe en la base de datos'
        ];
    }
}
