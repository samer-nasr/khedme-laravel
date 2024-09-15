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
}
