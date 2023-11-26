<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateChildrenAgeRequest extends FormRequest
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
            "age_min" => ["required", "integer"],
            "age_max" => [
                "required", 
                "integer", 
                "gt:age_min",  
                Rule::unique('children_ages')->where(function ($query) {
                    return $query->where('age_min', $this->input('age_min'));
                })
            ],
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
            'age_max.unique' => 'The combination must be unique.',
        ];
    }
}
