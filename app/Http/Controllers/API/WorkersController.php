<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class WorkersController extends Controller
{
    public function show()
    {
        $workers = User::where('role','service_provider')->get();

        return response()->json($workers);
    }

    public function show_by_service($name)
    {
        $workers = User::where('service_type',$name)->get();

        return response()->json($workers);
    }
}
