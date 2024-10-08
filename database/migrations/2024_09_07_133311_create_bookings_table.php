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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade'); // Foreign key to users (customer)
            $table->foreignId('service_provider_id')->constrained('users')->onDelete('cascade'); // Foreign key to users (service provider)
            $table->foreignId('service_id')->constrained('services')->onDelete('cascade'); // Foreign key to services
            $table->enum('status', ['pending', 'confirmed', 'completed', 'cancelled'])->default('pending'); // Booking status
            $table->timestamp('scheduled_date'); // Date and time for the scheduled service
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
