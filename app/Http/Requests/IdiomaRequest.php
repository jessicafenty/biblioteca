<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class IdiomaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'nome' => 'required|unique:idiomas|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Favor informar o Nome',
            'nome.unique' => 'Idioma existente!',
            'nome.max' => 'Tamanho máximo!',
        ];
    }
}
