<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreLeadRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'project_type' => ['required', 'string', 'max:255'],
            'budget' => ['required', 'string', 'max:255'],
            'timeline' => ['required', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:20'],
        ];
    }
}
