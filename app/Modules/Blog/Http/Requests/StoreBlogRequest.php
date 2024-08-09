<?php

namespace App\Modules\Blog\Http\Requests;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBlogRequest extends FormRequest {
    /**
     * Determine if the department is authorized to make this request.
     */
    public function authorize(): bool {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array {
        $rules['heading'] = 'required';
        $rules['name'] = 'required';
        $rules['title'] = 'required';
        $rules['categories'] = 'required';
        $rules['email'] = 'required';

        return $rules;
    }

    /**
     * Set the validation message.
     *
     * @return array
     */
    public function messages(): array {
        return array(
            'heading.required'  => 'The heading field is required.',
            'name.required'  => 'The name field is required.',
            'title.required'  => 'The title field is required.',
            'categories.required'  => 'The categories field is required.',
            'email.required'  => 'The email field is required.',
        );
    }
}
