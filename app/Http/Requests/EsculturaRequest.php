<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EsculturaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required',
            'material' => 'required',
            'descricao' => 'required',
            'ano_lancamento' => 'required',
            'id_artista' => 'required|exists:artista,id'
          ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'material.required' => 'Material é obrigatório',
            'descricao.required' => 'Descrição é obrigatória',
            'ano_lancamento.required' => 'Ano é obrigatório',
            'id_artista.required' => 'Artista é obrigatório',
            'id_artista.exists' => 'Artista não encontrado'
        ];
    }
}
