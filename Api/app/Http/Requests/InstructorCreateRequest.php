<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InstructorCreateRequest extends FormRequest
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
            'nombreInst' => 'required|min:5|max:16',
            'apellidoInst' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'required|numeric|unique:instructores',
            'id_user' => 'required|unique:instructores',
            'telefonoInst' => 'required|numeric',
            'id_programa' => 'required|numeric',
            'estado' => 'required'
        ];
    }

    public function messages(){

        return[
            'nombreInst.required' => 'El nombre es obligatorio',
            'apellidoInst.required' => 'El apellido es obligatorio',
            'tipoDoc.required' => 'Este campo es requerido',
            'numDoc.unique' => 'Este numero ya esta registrado',
            'numDoc.required' => 'Este campo es obligatorio',
            'id_user.unique' => 'Este correo ya esta en uso',
            'id_user.required' => 'Este campo es obligatorio',
            'telefonoInst.required' => 'Su telefono es obligatorio',
            'id_programa.required' => 'Este campo es obligatorio',
            'estado.required' => 'Opción obligatoria'
        ];
    }
}
