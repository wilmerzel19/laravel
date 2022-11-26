<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Persona>
 */
class PersonaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre'=> $this->faker->name,
            'cedula'=> $this->faker->creditCardNumber(),
            'telefono'=> $this->faker->creditCardNumber(),
            'sexo'=> $this->faker->randomElement(['Masculino','Femenino']),
          
  
          ];
    }
}
