<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(3),
            'author' => $this->faker->name(),
            'description' => $this->faker->paragraph(),
            'year_published' => $this->faker->year(),
            'genre' => $this->faker->word(),
            'barcode' => $this->faker->unique()->ean13(),
            'category_id' => Categoria::inRandomOrder()->first()->id_category ?? Categoria::factory(),
        ];
    }
}
