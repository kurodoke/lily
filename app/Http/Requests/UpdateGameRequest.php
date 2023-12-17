<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateGameRequest extends FormRequest
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
            'game_image' => 'image',
            'game_name' => [
                'required',
                'string',
            ],
            'game_author' => [
                'required',
                'string',
            ],
            'game_rating' => 'required|numeric',
            'game_download' => 'required|numeric|min:0',
            'game_size' => 'required|numeric|min:1',
            'game_description' => 'string',
            'game_age' => 'min:1|string',
            'game_tag' => '',
            'game_design' => '',
            'game_creativity' => '',
            'game_learn' => '',
            'game_premium' => 'required|string',
            'game_price' => 'nullable',
            'game_category' => 'min:1|string',
            'game_url' => 'required|url',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'game_name.unique' => 'The combination must be unique.',
            'game_author.unique' => 'The combination must be unique.',
        ];
    }
}
