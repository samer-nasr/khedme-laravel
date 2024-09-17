<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'customer_id',
        'service_provider_id',
        'rating',
        'review',
    ];

    // A review belongs to a customer (User)
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    // A review belongs to a service provider (User)
    public function serviceProvider()
    {
        return $this->belongsTo(User::class, 'service_provider_id');
    }

    // A review belongs to a booking
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
