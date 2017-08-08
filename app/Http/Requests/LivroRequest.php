<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LivroRequest extends FormRequest
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
            'titulo' => 'required|max:255',
            'descricao' => 'required|max:255',
            'sumario' => 'required|max:255',
            'num_pag' => 'required',
            'ano_pub' => 'required',
            'valor' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'titulo.required' => 'Favor informar o Título',
            'titulo.max' => 'Tamanho máximo!',
            'descricao.required' => 'Favor informar a Descrição',
            'descricao.max' => 'Tamanho máximo!',
            'sumario.required' => 'Favor informar o Sumário',
            'sumario.max' => 'Tamanho máximo!',
            'num_pag.required' => 'Favor informar o Número de Páginas',
            'ano_pub.required' => 'Favor informar o Ano de Publicação',
            'valor.required' => 'Favor informar o Valor',

        ];
    }
}
