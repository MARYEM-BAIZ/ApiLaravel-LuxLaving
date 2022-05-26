<?php

namespace Database\Factories;

use App\Models\Commande;
use App\Models\PaiementType;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Paiement>
 */
class PaiementFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'paiement_date' => $this->faker->date(),
            'total' => $this->faker->randomDigitNotNull(),
            'commande_id' => Commande::all()->random()->id,
            'paiement_type_id' => PaiementType::all()->random()->id
        ];
    }
}
