<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategoryRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules()
    {
        return [
            'name' => 'nullable|min:3|max:255',

        ];
    }

    public function messages()
    {
        return [
            'name.min' => 'يجب أن يحتوي الاسم على الأقل على 3 أحرف',
            'name.max' => 'يجب أن يحتوي الاسم على الأكثر 255 حرفًا',

        ];
    }
}
