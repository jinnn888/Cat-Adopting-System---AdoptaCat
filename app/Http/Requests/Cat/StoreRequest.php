<?php

namespace App\Http\Requests\Cat;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            "name" => 'required|string|max:255',
            "breed" => 'required|string|max:255',
            "age" => "required|integer|min:0",
            "gender" => "required|in:male,female",
            "description" => "required|string",
            "temperament" => "required|string|max:255",
            "adoption_fee" => "required|numeric|min:0",
            "images" => 'required|array|min:1|max:5',
            "images.*" => 'image|mimes:jpeg,jpg,png|max:2048',
        ];
    }
}