<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideosStoreRequest extends FormRequest
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
            'path' => 'required|url|active_url|string|unique:videos',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'path.required' => 'A URL deve ser informada.',
            'path.url' => 'Forneça uma URL válida.',
            'path.active_url' => 'Forneça uma URL válida.',
            'path.string' => 'The path field must be a string.',
            'path.unique' => 'Essa URL já está registrada no sistema.',
            'title.string' => 'The title field must be a string.',
            'description.string' => 'The description field must be a string.',
        ];
    }
}
