<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'year_published' => 'required|integer|min:1000|max:' . date('Y'),
            'genre' => 'nullable|string|max:100',
        ];
    }
}
