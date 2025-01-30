<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //asignar a los campos de la tabla un dato random con faker 
            'name' => fake()->name(),
            'email'=> fake()->unique()->safeEmail(),
            'phone' => fake()->randomNumber(5, true),
            'password' => fake()->password(2,6),
            'gender' => fake()->randomElement(['masculino','femenino', 'otro']),
            'employment' => fake()->jobTitle()
        ];
    }
}
