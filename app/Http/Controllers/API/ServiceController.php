<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return response()->json(service::all());
    }

    public function show($id)
    {
        $service = service::findOrFail($id);

        return response()->json($service);
    }

    public function store(Request $request)
    {
        $validated_data = $request->validate([
            'name' => 'required',
            'description' => 'min:15',
            'price' =>'required',
            'duration' => 'required'
        ]);

        $service = service::create($validated_data);

        return response()->json($service,201);
    }

    


}
