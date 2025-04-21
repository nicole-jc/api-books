<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required|email|exists:user,email',
            'password' => 'required|string'
        ];
    }

    public function messages(): array 
    {
        return [
            'email.required' => 'E-mail field is required!',
            'email.email' => 'Please use a valid e-mail!',
            'email.exists' => 'No account founded with this e-mail address.',
            'password.required' => 'Password field is required!',
            'password.string' => 'Password must be a string!'
        ];
    }
}
