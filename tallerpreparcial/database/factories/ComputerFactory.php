<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Computer>
 */
class ComputerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'brand' => $this->faker->company,
            'model' => $this->faker->word,
            'processor' => $this->faker->word,
            'ram' => $this->faker->numberBetween(4, 32),
            'storage' => $this->faker->numberBetween(128, 2048),
            'description' => $this->faker->sentence,
            'date_of_purchase' => $this->faker->date(),
        ];
    }
}
