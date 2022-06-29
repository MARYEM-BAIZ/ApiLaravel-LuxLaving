<?php

namespace Database\Factories;

use App\Models\ArticleCategorie;
use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'label' => $this->faker->word(),
            'description' => $this->faker->sentence(),
            'prix' => $this->faker->randomDigitNotNull(),
            'image' => $this->faker->imageUrl(150,150),
            'categorie_id' => ArticleCategorie::all()->random()->id,
            'service_id' => Service::all()->random()->id
        ];
    }
}
