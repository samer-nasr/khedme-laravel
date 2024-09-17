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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('booking_id')->constrained('bookings')->onDelete('cascade'); // Foreign key to bookings
            $table->foreignId('customer_id')->constrained('users')->onDelete('cascade'); // Foreign key to users (customer)
            $table->foreignId('service_provider_id')->constrained('users')->onDelete('cascade'); // Foreign key to users (service provider)
            $table->decimal('amount', 8, 2); // Payment amount
            $table->enum('payment_method', ['credit_card', 'cash']); // Payment method
            $table->enum('payment_status', ['pending', 'completed', 'failed'])->default('pending'); // Payment status
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payements');
    }
};
