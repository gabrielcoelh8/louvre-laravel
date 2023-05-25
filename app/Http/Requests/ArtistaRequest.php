<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtistaRequest extends FormRequest
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
            'data_nascimento' => 'required'
          ];
    }

    public function messages(): array
    {
        return [
            'nome.required' => 'Nome é obrigatório',
            'data_nascimento.required' => 'data_nascimento é obrigatório'
        ];
    }
}
