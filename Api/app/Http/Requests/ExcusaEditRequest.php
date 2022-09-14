<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExcusaEditRequest extends FormRequest
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
        $excusa = $this->route('excusa');

        return [
            'fechaExcusa' => 'required|date',
            'descExcusa' => 'required',
            'archivo' => 'required'
        ];
    }

    public function messages(){

        return[

            'fechaExcusa.required' => 'Fecha requerida',
            'descExcusa.required' => 'La descripcion es requerida',
            'archivo.required' => 'El archivo es obligatorio'
        ];
    }
}
