<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'description' => 'nullable|string',
            'year_published' => 'required|digits:4|integer',
            'genre' => 'required|string|max:100',
            'barcode' => 'required|string|max:20|unique:books,barcode,' . $this->route('book') . ',id_book',
            'category_id' => 'required|exists:categorias,id_category'
        ];
    }
}
