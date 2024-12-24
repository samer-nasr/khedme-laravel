<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\service;
use App\Models\User;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return response()->json(Booking::all());
    }

    public function show($id)
    {
        return response()->json(Booking::findOrFail($id));
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

    public function show_service_provider_bookings($id)
    {
        $bookings = Booking::where('service_provider_id',$id)->get();

        return response()->json($bookings);
    }

    public function show_customer_bookings($id)
    {
        $bookings = Booking::where('customer_id',$id)->get();

        return response()->json($bookings);
    }

    public function show_services_bookings()
    {
    
        $bookings = service::with('bookings')->get();

        return response()->json($bookings);
    }
}
