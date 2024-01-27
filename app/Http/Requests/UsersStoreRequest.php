<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersStoreRequest extends FormRequest
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
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'role' => 'required|in:leitor,autor,editor,administrador',
            'phone' => 'required|regex:/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome do usuário deve ser fornecido.',
            'email.required' => 'O e-mail do usuário deve ser fornecido.',
            'email.email' => 'O e-mail do usuário deve ser válido.',
            'email.unique' => 'O e-mail do usuário já está em uso.',
            'password.required' => 'A senha do usuário deve ser fornecida.',
            'password.min' => 'A senha do usuário deve ter no mínimo 8 caracteres.',
            'password_confirmation.required' => 'A confirmação da senha do usuário deve ser fornecida.',
            'password_confirmation.same' => 'A confirmação da senha do usuário deve ser igual à senha fornecida.',
            'role.required' => 'A função do usuário deve ser fornecida.',
            'role.in' => 'A função do usuário deve ser válida.',
            'phone.required' => 'O numero de telefone do usuário deve ser fornecido.',
            'phone.regex' => 'O numero de telefone do usuário deve ser válido.',
        ];
    }
}
