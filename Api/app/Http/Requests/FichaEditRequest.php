<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FichaEditRequest extends FormRequest
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
        $ficha = $this->route('ficha');

        return [

            'numFicha' => 'unique:fichas,numFicha,'.$this->ficha.'|required|numeric',
            'id_instructor' => 'required',
            'id_programa' => 'required',
        ];
    }

    public function messages(){

        return [
            'numFicha.unique' => 'Esta ficha ya existe',
            'id_instructor.required' => 'Esta opción es requerida',
            'id_programa.required' => 'Esta opción es requerida'
        ];
    }
}
