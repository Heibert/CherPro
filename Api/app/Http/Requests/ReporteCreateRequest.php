<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReporteCreateRequest extends FormRequest
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
            'fechaReporte' => 'required',
            'descReporte' =>  'required',
            'id_coordinador' => 'required',                        
            'id_instructor' => 'required',
            'id_aprendiz' => 'required'
        ];                      
    }

    public function messages(){
        return[
            'fechaReporte.required' => 'Este campo es requerido',
            'descReporte.required' => 'El asunto es requerido',
            'id_coordinador.required' => 'Este campo es requerido',
            'id_instructor.required' => 'Este campo es requerido',
            'id_aprendiz.required' => 'Este campo es requerido'
        ];
    }
}
