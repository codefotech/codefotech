<?php

namespace App\Modules\Course\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCourseRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
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
        $rules['categories'] = 'required';
        $rules['instructors'] = 'required';
        $rules['title'] = 'required';
        $rules['create_as'] = 'required';
        $rules['course_level'] = 'required';
        $rules['pricing_type'] = 'required';
        $rules['price'] = 'required';
        $rules['status'] = 'required';

        return $rules;
    }

    /**
     * Set the validation message.
     *
     * @return array
     */
    public function messages(): array {
        return [
            'categories.required'         => 'The categories field is required.',
            'instructors.required'         => 'The instructors field is required.',
            'title.required'               => 'The title field is required.',
            'create_as.required'           => 'The catagory id field is required.',
            'course_level.required'        => 'The course level field is required.',
            'pricing_type.required'        => 'The Pricing type field is required.',
            'price.required'               => 'The price field is required.',
            'status.required'              => 'The status field is required.',
        ];
    }
}