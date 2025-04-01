<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = 'categorias'; // 👈 importante

    protected $primaryKey = 'id_category';

    protected $fillable = [
        'name',
        'description',
        'priority',
        'status'
    ];

    public function books()
    {
        return $this->hasMany(Book::class, 'category_id', 'id_category');
    }
}
