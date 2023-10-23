<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsUpdateRequest extends FormRequest
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
            'title' => 'required',
            'content' => 'required',
            'media' => 'image|mimes:jpeg,png,gif|max:2048', // Se você permitir o upload de mídia
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O título do post deve ser fornecido.',
            'content.required' => 'O conteúdo do post deve ser fornecido.',
        ];
    }
}
