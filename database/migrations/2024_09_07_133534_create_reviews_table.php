<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade'); // Foreign key to users (customer)
            $table->foreignId('service_provider_id')->constrained('users')->onDelete('cascade'); // Foreign key to users (service provider)
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade'); // Foreign key to bookings
            $table->tinyInteger('rating')->unsigned(); // Rating out of 5
            $table->text('review')->nullable(); // Optional review text
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviews');
    }
};
