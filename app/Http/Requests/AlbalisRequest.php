<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PresupuestoviviendaController extends Controller

class AlbalisRequest extends FormRequest
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
            'direccion' => 'required',
            'dui' => 'required|string',
            'nit' => 'required',
            'cuenta' => 'required',
            'id_cliente' => 'required',
        ];
    }
}
