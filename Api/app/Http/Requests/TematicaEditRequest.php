<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TematicaEditRequest extends FormRequest
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
        $tematica = $this->route('tematica');
        return [
            //
            'nombreTematica' => 'required|alpha',
            'id_instructor' => 'required',
            'id_programa' => 'required',
            'id_ficha' => 'required'
        ];
    }

    public function messages(){
        return[
            'nombreTematica.required' => 'El nombre es obligatorio',
            'nombreTematica.alpha' => 'Solo se permiten letras',          
            'id_instructor.required' => 'Campo obligatorio',
            'id_programa.required' => 'Campo obligatorio',
            'id_ficha.required' => 'Campo obligatorio',
        ];
    }
}
