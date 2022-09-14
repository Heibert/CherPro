<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaCreateRequest extends FormRequest
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
            'nombrePrograma' => 'required|max:36|alpha',
            'id_coordinacion' => 'required'
        ];
    }

    public function messages(){
        return[
            'nombrePrograma.required' => 'El nombre es obligatorio',
            'nombrePrograma.max' => 'El nombre tiene que tener maximo 35 letras',
            'nombrePrograma.alpha' => 'Solo se requieren letras', 
            'id_coordinacion.required' => 'Campo obligatorio'
        ];
    }
}
