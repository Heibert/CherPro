<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CoordinacionEditRequest extends FormRequest
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

            'nomCoordinacion' => 'required|min:5|max:36'
        ];
    }

    public function messages(){
        return[
            'nomCoordinacion.required' => 'El nombre es obligatorio',
            'nomCoordinacion.min' => 'El nombre debe tener minimo 5 letras',
            'nomCoordinacion.max' => 'El nombre debe tener maximo 35 letras',
        ];
    }
}
