<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministradorCreateRequest extends FormRequest
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

            'name' => 'required|min:5|max:16|alpha',
            'apellido' => 'required|min:3|max:20|alpha',
            'telefono' => 'required|numeric|unique:administradors',
            'email' => 'required|unique:administradors',
            'id_programa' => 'required'
        ];
    }

    public function messages(){

        return [
            'name.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'telefono.required' => 'Este campo es requerido',
            'email.required' => 'Su correo personal es requerido',
            'id_programa.required' => 'Esta opción es requerida',
        ];
    }
}
