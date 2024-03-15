<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StorePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // return false;
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
            'title' => ['required', 'string'],
            'slug' => [
                'required',
                'string',
                // 'unique:articles',
                Rule::unique('articles')->ignore($this->route('article'))

             ],
            'images' => ['required', 'array'],
            'images.*' => ['image'],
            'context' => ['required', 'string'],
            'excerpt' => ['required', 'string'],
        ];
    }
}
