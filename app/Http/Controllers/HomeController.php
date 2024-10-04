<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Home page view
    public function index()
    {
        return view('index');
    }
}
