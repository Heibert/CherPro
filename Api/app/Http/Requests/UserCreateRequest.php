<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserCreateRequest extends FormRequest
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
            'telefono' => 'required|numeric',
            'email' => 'required',
            'password' => 'required|numeric',
            'rol' => 'required'
        ];
    }
        public function messages(){

            return [
                'name.required' => 'El nombre es obligatorio',
                'apellido.required' => 'El apellido es obligatorio',
                'email.required' => 'Su correo personal es requerido',
                'telefono.required' => 'Este campo es requerido',
                'password.required' => 'Esta opción es requerida',
                'rol' => 'required'
            ];
        }
    }