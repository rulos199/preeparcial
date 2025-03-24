<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'book_name' => 'required|string|max:255',
            'book_author_name' => 'required|string|max:255',
            'book_price' => 'required|numeric|min:0',
            'book_stock' => 'required|integer|min:0',
            'book_status' => 'required|boolean',
        ];
    }
}
