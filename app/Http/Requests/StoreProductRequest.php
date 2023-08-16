<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
    public function rules(): array
    {
        // dd(request());
        return [
            'product' => ['nullable', 'exists:products,id'],
            'quantity' => ['required_without:product'],
            'price' => ['required_without:product'],
            'name' => ['required_without:product'],
            'description' => ['required_without:product'],
            'classification_id' => ['required_without:product','exists:classifications,id'],
            'vendor_id' => ['required_without:product','exists:vendors,id'],


            // 'profile' => ['required_without:product', 'image'],

            // 'quantity' => 'required',
            // 'price' => 'required',
            // 'name' => 'required',
            // 'description' => 'nullable',
            // 'classification_id' => 'required|exists:classifications,id',
            // 'vendor_id' => 'required|exists:vendors,id',
        ];
    }

    public function messages()
    {
        return [
            'quantity.required' => 'Please enter the quantity.',
            'price.required' => 'Please enter the price.',
            'name.required' => 'Please enter the name.',
            'classification_id.required' => 'Please select a classification.',
            'classification_id.exists' => 'The selected classification does not exist.',
            'vendor_id.required' => 'Please select a vendor.',
            'vendor_id.exists' => 'The selected vendor does not exist.',
        ];
    }
}
