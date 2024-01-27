<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostsStoreRequest extends FormRequest
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
            'media' => 'required|image|mimes:jpeg,png,gif|max:2048', // Define as regras para o upload da imagem
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O título do post deve ser fornecido.',
            'content.required' => 'O conteúdo do post deve ser fornecido.',
            'media.required' => 'A imagem deve ser enviada.',
            'media.image' => 'A Mídia deve ser uma imagem.',
            'media.mimes' => 'A Mídia deve ser uma imagem do tipo jpeg, png ou gif.',
            'media.max' => 'A Mídia deve ter no máximo 2MB.',
        ];
    }

}
