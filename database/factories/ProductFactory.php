<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'quantity' => $this->faker->randomDigit(),
            'price' => $this->faker->randomDigit(),
            'describe' => $this->faker->paragraph(rand(1, 2)),
            'updated_at' => $this->faker->dateTime(),
            'created_at' => $this->faker->dateTime(),
        ];
    }
}
