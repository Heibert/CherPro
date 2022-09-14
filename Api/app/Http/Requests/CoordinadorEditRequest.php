<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoordinadorEditRequest extends FormRequest
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
        $coordi = $this->route('coordinador');
        return [
            'nomCoordinador' => 'required|min:5|max:16',
            'apeCoordinador' => 'required',
            'tipoDoc' => 'required',
            'numDoc' => 'unique:coordinadors,numDoc,'.$this->coordinador.'|required|numeric',
            'correoMisena' => 'unique:coordinadors,correoMisena,'.$this->coordinador.'|required',
            'telefonoCoordinador' => 'required|numeric',
            'id_coordinacion' => 'required|numeric'
        ];
    }

    public function messages(){
        
        return [
            'nomCoordinador.required' => 'El nombre es obligatorio',
            'apeCoordinador.required' => 'El apellido es obligatorio',
            'tipoDoc.required' => 'Este campo es requerido',
            'numDoc.unique' => 'Este numero ya esta registrado',
            'numDoc.required' => 'Este campo es obligatorio',
            'correoMisena.unique' => 'Este correo ya esta en uso',
            'correoMisena.required' => 'Este campo es obligatorio',
            'telefonoCoordinador.required' => 'Su telefono es obligatorio',
            'id_coordinacion.required' => 'Este campo es obligatorio'
        ];
    }
}
