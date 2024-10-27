<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Review;
use App\Models\service;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'first_name' => 'samer',
            'last_name' => 'nasr',
            'email' => 'samer@live.com',
        ]);


        User::factory()->count(10)->customer()->create();
        User::factory()->count(5)->serviceProvider()->create();


        // service::factory()->count(5)->create();
        service::factory()->create([
            'name' => 'Plumber',
        ]);

        service::factory()->create([
            'name' => 'Cleaner',
        ]);

        service::factory()->create([
            'name' => 'Electrican',
        ]);

        service::factory()->create([
            'name' => 'Painter',
        ]);

        service::factory()->create([
            'name' => 'Pest Control Specialist',
        ]);

        service::factory()->create([
            'name' => 'HVAC Technician',
        ]);



        Booking::factory()->count(10)->create();

        Payment::factory()->count(10)->create();

        Review::factory()->count(10)->create();
    }
}
