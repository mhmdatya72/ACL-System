<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true
        ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:groups,slug,',
            'description' => 'nullable|string',
            'level' => 'required|integer|min:1',
            'allow_guest_access' => 'boolean',
            'status' => 'in:active,inactive',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'حقل الاسم مطلوب.',
            'slug.required' => 'حقل الرابط (Slug) مطلوب.',
            'slug.unique' => 'هذا الرابط (Slug) مستخدم بالفعل.',
            'level.required' => 'حقل المستوى مطلوب.',
            'level.min' => 'يجب أن يكون المستوى على الأقل 1.',
            'status.in' => 'حالة المجموعة يجب أن تكون إما نشطة أو غير نشطة.',
        ];
    }
}
