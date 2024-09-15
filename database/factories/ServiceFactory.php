<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->randomElement(['Plumbing', 'House Cleaning', 'Electrical Work', 'Gardening']),
            'description' => $this->faker->sentence,
            'price' => $this->faker->randomFloat(2, 50, 500), // Random price between 50 and 500
            'duration' => $this->faker->optional()->numberBetween(30, 240), // Optional duration in minutes
        ];
    }
}
