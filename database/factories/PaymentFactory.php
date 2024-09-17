<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Payment>
 */
class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'booking_id' => Booking::factory(), // Create a related booking
            'customer_id' => function (array $attributes) {
                return Booking::find($attributes['booking_id'])->customer_id;
            },
            'service_provider_id' => function (array $attributes) {
                return Booking::find($attributes['booking_id'])->service_provider_id;
            },
            'amount' => $this->faker->randomFloat(2, 50, 500), // Payment amount
            'payment_method' => $this->faker->randomElement(['credit_card', 'cash']),
            'payment_status' => $this->faker->randomElement(['pending', 'completed', 'failed']),
        ];
    }
}
