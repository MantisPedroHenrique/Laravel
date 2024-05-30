<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
          'name' => 'required',
          'cpf' => 'required',
          'email' => 'required',
          'fone' => 'required',
          'nascimento' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'=> 'O nome é obrigatorio',
            'cpf.required'=> 'O cpf é obrigatorio',
            'email.required'=> 'O e-mail é obrigatorio',
            'fone.required'=> 'O telefone é obrigatorio',
            'nascimento.required'=> 'A data de nascimento é obrigatoria',
        ];
    }
}
