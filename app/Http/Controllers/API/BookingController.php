<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return response()->json(Booking::all());
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required|integer|exists:users,id',
            'service_provider_id' => 'required|integer|exists:users,id',
            'service_id' => 'required|integer|exists:services,id',
            'status' => 'required|string',
            'scheduled_date' => 'required|date',
        ]);

        $booking = Booking::create($validatedData);

        return response()->json($booking, 201);
    }
}
