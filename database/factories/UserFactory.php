<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName,
            'last_name' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'phone' => $this->faker->phoneNumber,
            'address' => $this->faker->address,
            'password' => Hash::make('password'), // default password
            'role' => $this->faker->randomElement(['customer', 'service_provider']),
            'gender' => $this->faker->randomElement(['male', 'female']),
            'service_type' => $this->faker->randomElement(['plumber', 'cleaner', 'electrician', 'painter' , 'Pest Control Specialist' , 'HVAC Technician']),
            'rating' => $this->faker->optional()->randomFloat(2, 1, 5), // Optional rating for service providers
            'availability' => $this->faker->boolean(80), // 80% chance of being available
        ];
    }

    public function customer()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'customer',
                'service_type' => null,
                'rating' => null,
                'availability' => null,
            ];
        });
    }

    public function serviceProvider()
    {
        return $this->state(function (array $attributes) {
            return [
                'role' => 'service_provider',
                'rate' => $this->faker->randomFloat(2, 12, 25),
                'rating' => $this->faker->randomFloat(2, 1, 5), // Optional rating for service providers
            ];
        });
    }
    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
