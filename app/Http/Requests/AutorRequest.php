<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AutorRequest extends FormRequest
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
            'nome' => 'required|unique:autors|max:255',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Favor informar o Nome',
            'nome.unique' => 'Autor existente!',
            'nome.max' => 'Tamanho máximo!',
        ];
    }
}
