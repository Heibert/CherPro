<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProgramaEditRequest extends FormRequest
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
        $programa = $this->route('programa');
        
        return [
            'nombrePrograma' => 'required|min:5|max:36|alpha',
            'id_coordinacion' => 'unique:programas,id_coordinacion,'.$this->programa.'|required'
        ];
    }

    public function messages(){
        return[
            'nombrePrograma.required' => 'El nombre es obligatorio',
            'nombrePrograma.min' => 'El nombre tiene que tener minimo 5 letras',
            'nombrePrograma.max' => 'El nombre tiene que tener maximo 35 letras',
            'nombrePrograma.alpha' => 'Solo se requieren letras', 
            'id_coordinacion.required' => 'Campo obligatorio'
        ];
    }
}
