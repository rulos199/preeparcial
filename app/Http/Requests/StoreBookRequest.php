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
            'category_id' => 'required|exists:categories,id_category',
             'barcode' => 'required|string|unique:books,barcode|max:255',
              'category_id' => 'required|exists:categorias,id_category'
        ];
        
    }
}
