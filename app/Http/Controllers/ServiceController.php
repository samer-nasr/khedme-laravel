<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service($service)
    {

        $services = User::where([
            ['role', '=', 'service_provider'],
            ['service_type', '=', $service]
        ])->get();

        return view('services.service_page', compact('services','service'));
    }

    public function pay()
    {
        return view('pay');
    }

    public function search(Request $request, $service)
    {

        if ($request->gender == 'all') {
            $services = User::where([
                ['role', '=', 'service_provider'],
                ['service_type', '=', $service],
            ])->get();
        }

        else
        {
            $services = User::where([
                ['role', '=', 'service_provider'],
                ['service_type', '=', $service],
                ['gender' ,'=', $request->gender]
            ])->get();
        }

        return view('services.service_page', compact('services','service'));

    }
}
