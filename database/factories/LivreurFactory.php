<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Livreur>
 */
class LivreurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->word(),
            'prenom' => $this->faker->word(),
            'adresse' => $this->faker->address(),
            'phone' => $this->faker->numerify('#####'),
            'email' => $this->faker->unique()->email(),
            'password' => $this->faker->password(),
        ];
    }
}
