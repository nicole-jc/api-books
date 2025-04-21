<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'genre' => 'required|string|max:100',
            'year' => 'required|integer|digits:4|between:1800,' . date('Y'),
        ];
    }

    public function messages(): array 
    {
        return [
        'title.required' => "Title field is required!",
        'title.string' => "Title must be a string!",
        'title.max' => "Title can't store more than 255 chars!",
        'author.required' => "Author is required!",
        'author.string' => "Author must be a string!",
        'author.max' => "Author can't store more than 255 chars!",
        'genre.required' => "Genre filed is required!",
        'genre.string' => "Genre must be a string!",
        'genre.max' => "Genre can't store more than 100 chars!",
        'year.required' => "Year field is required!",
        'year.integer' => "Year must be an integer!",
        'year.digits' => "Year can't store more than 4 numbers!",
        'year.between' => "Year must be between 1800 and " . date('Y') . "!",

        ];
    }
}
