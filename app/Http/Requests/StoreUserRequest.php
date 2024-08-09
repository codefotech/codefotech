<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
        $userId = $this->route('register');

        $rules['user_name'] = 'required|string|max:255';
        $rules['email'] = 'required|email|unique:users,email,' . $userId;
        $rules['password'] = 'required|min:8';
        return $rules;
    }

    public function messages(): array{
        return array([
            'user_name.required' => 'User Name is required',
            'email.required' => 'Email is required',
            'email.unique' => 'This email has already been taken',
            'password.required' => 'Password is required',
            'password.min' => 'Password must be at least 8 characters',
        ]);
    }
}
