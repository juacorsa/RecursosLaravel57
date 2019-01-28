<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdiomaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'nombre' => 'required|max:40|unique:idiomas'
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El nombre del idioma es un dato obligatorio.',
            'nombre.max'      => 'El nombre del idioma debe tener como máximo :max caracteres.',
            'nombre.unique'   => 'El idioma indicado ya existe en la base de datos'
        ];
    }
}
