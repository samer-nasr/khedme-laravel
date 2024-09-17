<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer_id',
        'service_provider_id',
        'service_id',
        'status',
        'scheduled_date'
    ];

    // A booking belongs to a customer (User)
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    // A booking belongs to a service provider (User)
    public function serviceProvider()
    {
        return $this->belongsTo(User::class, 'service_provider_id');
    }

    // A booking is for a specific service
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    // A booking has one payment
    public function payment()
    {
        return $this->hasOne(Payment::class);
    }

    // A booking can have one review
    public function review()
    {
        return $this->hasOne(Review::class);
    }
}
