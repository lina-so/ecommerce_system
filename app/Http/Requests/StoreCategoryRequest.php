<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
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
            'name' => 'required',

        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => 'الاسم مطلوب',
            // 'name.min' => 'يجب أن يحتوي الاسم على الأقل على 3 أحرف',
            // 'name.max' => 'يجب أن يحتوي الاسم على الأكثر 255 حرفًا',

        ];
    }
}
