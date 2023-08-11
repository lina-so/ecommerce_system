<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClassificationRequest extends FormRequest
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
            // 'name' => 'required|min:3|max:255',
            'name' => 'required',
            'category_id' => 'required|exists:categories,id',
        ];
    }

    public function messages()
    {
        return [
            // 'name.required' => 'الاسم مطلوب',
            // 'name.min' => 'يجب أن يحتوي الاسم على الأقل على 3 أحرف',
            // 'name.max' => 'يجب أن يحتوي الاسم على الأكثر 255 حرفًا',
            'category_id.required' => 'يجب تحديد الفئة',
            'category_id.exists' => 'الفئة المحددة غير صالحة',
        ];
    }
}
