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


    public function rules()
    {
        return [
            'name' => 'nullable|max:255',


        ];
    }

    public function messages()
    {
        return [
            'name.max' => 'يجب أن يحتوي الاسم على الأكثر 255 حرفًا',

        ];
    }
}
