<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->sentence(),
            'description'=>$this->faker->text(),
            'image'=>$this->faker->imageUrl(),
            'prix'=>rand(1000,15000),
            'active'=>$this->faker->boolean(80),
        ];
    }
}
