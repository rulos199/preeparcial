<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categoria>
 */
class CategoriaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
             'name' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'priority' => $this->faker->numberBetween(1, 10),
            'status' => $this->faker->boolean(),
        ];
    }
}
