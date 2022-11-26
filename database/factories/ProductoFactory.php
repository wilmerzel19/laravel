<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Producto>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'imagen'=> $this->faker->name,
            'nombre'=> $this->faker->randomElement(['Tabas','jordan','nike','addidas']),
            'color'=> $this->faker->randomElement(['negro','blanco','gris']),
            'no_tenis'=> $this->faker->randomElement(['39','40']),
        ];
    }
}
