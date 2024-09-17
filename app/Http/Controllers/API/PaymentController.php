<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'booking_id' => 'required',
            'customer_id' => 'required',
            'service_provider_id' => 'required',
            'amount' => 'required',
            'payment_method'=> 'required',
            'payment_status' => 'required'
        ]);

        $payment = Payment::create($validated_data);

        return response()->json($payment,201);
    }

    public function index()
    {
        return response()->json(Payment::all(),201);
    }

    public function show($id)
    {
        return response()->json(Payment::findOrFail($id),201);
    }

}
