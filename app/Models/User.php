<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'address',
        'password',
    ];

    // A customer can have many bookings
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'customer_id');
    }

    // A service provider can have many bookings
    public function providedBookings()
    {
        return $this->hasMany(Booking::class, 'service_provider_id');
    }

    // A customer can make many payments
    public function payments()
    {
        return $this->hasMany(Payment::class, 'customer_id');
    }

    // A service provider can receive many payments
    public function receivedPayments()
    {
        return $this->hasMany(Payment::class, 'service_provider_id');
    }

    // A customer can give many reviews
    public function reviews()
    {
        return $this->hasMany(Review::class, 'customer_id');
    }

    // A service provider can receive many reviews
    public function receivedReviews()
    {
        return $this->hasMany(Review::class, 'service_provider_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
