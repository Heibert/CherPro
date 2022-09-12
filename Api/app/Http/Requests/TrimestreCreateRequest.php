<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TrimestreCreateRequest extends FormRequest
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
            'numTrimestre' => 'required|numeric',
            'id_ficha' => 'required'
        ];
    }

    public function messeges(){
        return[
            'numTrimestre.required' => 'Este campo es requerido',
            'numTrimestre.numeric' => 'Solo se requieren números',
            'id_ficha' => 'Este campo es requerido'
        ];
    }
}
