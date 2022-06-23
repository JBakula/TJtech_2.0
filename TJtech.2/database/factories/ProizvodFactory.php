<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proizvod>
 */
class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'kategorija_id' => 1,
            'proizvodjac_id' => 1,
            'Model' => $this->faker->randomElement(['lenovo', 'dell', 'HP', 'ASUS']),
            'RAM' => $this->faker->randomElement(['8GB', '4GB', '16GB', '32GB']),
            'CPU' => $this->faker->randomElement(['Intel', 'Ryzen']),
            'GPU' => $this->faker->randomElement(['HP', 'Nvidia', 'Titan', 'Radeon']),
            'Memorija' => $this->faker->numberBetween($min=100, $max=2060),
            'Cijena' => $this->faker->randomFloat($nbMaxDecimals = 2, $min = 300, $max = 3000),
            'Kolicina' => $this->faker->randomDigit()
        ];
    }
}
