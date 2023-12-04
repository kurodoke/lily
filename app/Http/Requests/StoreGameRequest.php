<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
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
            'game_image' => 'required|file',
            'game_name' => 'required|string|unique:games,name,null,id',
            'game_author' => 'required|string|unique:games,author,null,id',
            'game_rating' => 'required|numeric',
            'game_download' => 'required|numeric',
            'game_size' => 'required|numeric',
            'game_description' => 'string',
            'game_age' => 'numeric',
            'game_tag' => '',
            'game_design' => '',
            'game_creativity' => '',
            'game_learn' => '',
        ];
    }
}
