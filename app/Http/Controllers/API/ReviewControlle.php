<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewControlle extends Controller
{
    public function index()
    {
        return response()->json(Review::all(),201);
    }

    public function show($id)
    {
        return response()->json(Review::findOrFail($id),201);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'customer_id' =>'required',
            'service_provider_id'=> 'required',
            'booking_id'=>'required',
            'rating'=>'numeric',
            'review'=>'required'
        ]);

        $review = Review::create($validated_data);

        return response()->json($review,201);
    }
}
