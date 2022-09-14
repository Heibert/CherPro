<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaCreateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'numFicha' => 'required|numeric|unique:fichas',
            'cantAprendiz' => 'required|numeric',
            'id_instructor' => 'required',
            'id_programa' => 'required',
        ];
    }

    public function messages(){

        return [
            'numFicha.required' => 'El número es requerido',
            'numFicha.unique' => 'Esta ficha ya existe',
            'cantAprendiz.required' => 'La cantidad es requerida',
            'id_instructor.required' => 'Esta opción es requerida',
            'id_programa.required' => 'Esta opción es requerida'
        ];
    }
}