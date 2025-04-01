<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categoria; // 👈 nombre real de tu modelo

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Categoria::factory()->count(5)->create();
    }
}
