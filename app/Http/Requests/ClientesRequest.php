<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientesRequest extends FormRequest
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
            'nombre' => 'required|string|max:255',
            'dui' => 'required|string',
            'nit' => 'required|string',
            'direccion' => 'required|string',
            'ubicacion' => 'required',
            'solucion' => 'required|string',
            'codigosim' => 'required',
            'taza' => 'required',
            'fechafin' => 'required|date',
        ];
    }
}
