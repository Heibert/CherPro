<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExcusaCreateRequest extends FormRequest
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
            'fechaExcusa' => 'required|date',
            'descExcusa' => 'required',
            'archivo' => 'required'
        ];
    }

    public function messages(){

        return[

            'fechaExcusa.required' => 'Fecha requerida',
            'descExcusa.required' => 'El asunto es requerido',
            'archivo.required' => 'El archivo es obligatorio'
        ];
    }
}
