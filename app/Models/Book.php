<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Book extends Model
{
    use HasFactory;

    protected $primaryKey = 'id_book';
    public $incrementing = false;
    protected $keyType = 'string';
    

    protected $fillable = [
        'title',
        'author',
        'description',
        'year_published',
        'genre',
        'barcode',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(Categoria::class, 'category_id', 'id_category');
    }
}
