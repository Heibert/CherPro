<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AprendizCreateRequest extends FormRequest
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
            'nombreAprend' => 'required|min:5|max:16|alpha',
            'apelliAprend' => 'required|min:3|max:20|alpha',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric|unique:aprendices',
            'correoMisena' => 'required',
            'correoAprend' => 'required|unique:aprendices',
            'telefonoAprend' => 'required|numeric',
            'id_ficha' => 'required|numeric',
        ];
    }
        public function messages(){

            return [
                'nombreAprend.required' => 'El nombre es obligatorio',
                'apelliAprend.required' => 'El apellido es obligatorio',
                'tipoDoc.required' => 'El tipo de documento es obligatorio',
                'numDoc.required' => 'El número es requerido',
                'correoMisena.required' => 'El correo es obligatorio',
                'correoAprend.required' => 'Su correo personal es requerido',
                'telefonoAprend.required' => 'Este campo es requerido',
                'id_ficha.required' => 'Esta opción es requerida',
            ];
        }
    }

