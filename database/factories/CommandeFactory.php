<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\ClientAdresseCollect;
use App\Models\ClientAdresseLivraison;
use App\Models\CommandeStatut;
use App\Models\Livreur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commande>
 */
class CommandeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'commande_date' => $this->faker->date(),
            'commande_collecte_date' => $this->faker->date(),
            'commande_livraison_date' => $this->faker->date(),
            'total' => $this->faker->randomDigitNotNull(),
            'client_id' => Client::all()->random()->id,
            'livreur_collecte_id' => Livreur::all()->random()->id,
            'livreur_livraison_id' => Livreur::all()->random()->id,
            'adresse_collecte_id' => ClientAdresseCollect::all()->random()->id,
            'adresse_livraison_id' => ClientAdresseLivraison::all()->random()->id,
            'commande_statut_id' => CommandeStatut::all()->random()->id
        ];
    }
}
