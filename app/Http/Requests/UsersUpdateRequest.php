<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersUpdateRequest extends FormRequest
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

        $id = $this->route('id'); // Use 'id' para obter o valor do parâmetro da rota

        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'required|min:8',
            'password_confirmation' => 'required|same:password',
            'role' => 'required|in:leitor,autor,editor,administrador',
            'phone' => 'required|regex:/^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/',
        ];
    }
}
