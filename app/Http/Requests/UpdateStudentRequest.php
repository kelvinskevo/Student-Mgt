<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStudentRequest extends FormRequest
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
        return [
            'name' => 'required|string|max:255',
            'address' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'email' => 'required|email|unique:students,email',
            'dob' => 'required|date',
            'class' => 'required|exists:courses,id',
            'gender' => 'required|string|in:male,female',
            'admission_number' => 'required|string|unique:students,admission_number',
            'religion' => 'nullable|string|max:255',
            'blood_group' => 'nullable|string|max:3',
            'status' => 'required|string|in:active,inactive',
            'profile_pic' => 'nullable|image|max:2048',
            'created_by' => 'required|exists:users,id'
        ];
    }
}
