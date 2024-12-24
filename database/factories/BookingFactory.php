<?php

namespace Database\Factories;

use App\Models\service;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => User::factory()->customer()->create()->id, // Create a customer and get its ID
            'service_provider_id' => User::factory()->serviceProvider()->create()->id, // Create a service provider and get its ID
            // 'service_id' => Service::factory()->create()->id, // Create a service and get its ID
            'service_id' =>Service::find(fake()->numberBetween(1,6)),
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'completed', 'cancelled']),
            'scheduled_date' => $this->faker->dateTimeBetween('+1 days', '+1 month'), // Schedule date between tomorrow and next month
        ];
    }
}
