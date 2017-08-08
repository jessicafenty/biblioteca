<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditoraRequest extends FormRequest
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
            'descricao' => 'required|unique:editoras|max:255',
        ];
    }

    public function messages()
    {
        return [
            'descricao.required' => 'Favor informar a Descrição',
            'descricao.unique' => 'Editora existente!',
            'descricao.max' => 'Tamanho máximo!',
        ];
    }
}
