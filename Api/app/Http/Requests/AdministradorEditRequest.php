<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministradorEditRequest extends FormRequest
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
        $admin = $this->route('administrador');

        return [

            'name' => 'required|min:5|max:16|alpha',
            'apellido' => 'required|min:3|max:20|alpha',
            'telefono' => 'unique:administradors,telefono,'.$this->administrador.'|required|numeric',
            'id_user' => 'unique:administradors,email,'.$this->administrador.'required|email',
            'id_programa' => 'required'
        ];
    }

    public function messages(){

        return [
            'name.required' => 'El nombre es obligatorio',
            'apellido.required' => 'El apellido es obligatorio',
            'telefono.required' => 'Este numero de telefono ya esta en uso',
            'id_user.required' => 'Este correo ya esta en uso',
            'id_programa.required' => 'Esta opción es requerida',
        ];
    }
}