<?php

namespace Database\Factories;

use App\Models\Article;
use App\Models\Commande;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commandedetail>
 */
class CommandedetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'quantite' => $this->faker->randomNumber(),
            'commande_id' => Commande::all()->random()->id,
            'article_id' => Article::all()->random()->id
        ];
    }
}
