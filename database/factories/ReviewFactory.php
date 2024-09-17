<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => function (array $attributes) {
                return Booking::find($attributes['booking_id'])->customer_id;
            },
            'service_provider_id' => function (array $attributes) {
                return Booking::find($attributes['booking_id'])->service_provider_id;
            },
            'booking_id' => Booking::factory()->create()->id, // Create a related booking
            'rating' => $this->faker->numberBetween(1, 5), // Rating between 1 and 5
            'review' => $this->faker->optional()->sentence, // Optional review text
        ];
    }
}
