<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class Form3Request extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:2'],
            'email' => 'required|email|ends_with:gmail.com',
            'subject' => 'required',
            'message' => 'required'
        ];
    }

    public function messages(): array
    {
        return [
            'required' => 'هذا الحقل مطلووووووب',
            'name.required' => 'الاسم مطلوووب',
            'email.required' => 'الايميل اهم من اسمك'
        ];
    }
}
