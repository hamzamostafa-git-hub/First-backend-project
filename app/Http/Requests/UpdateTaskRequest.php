<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
        'title' => 'required|max:255',
        'due_date' => 'nullable|date',
    ];
}


    public function messages(): array
    {
        return [
            'title.required' => 'The task title cannot be empty.',
            'title.max' => 'The task title cannot be longer than 255 characters.',
        ];
    }
}
