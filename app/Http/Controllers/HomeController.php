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

    public function about_us()
    {
        return view('about_us');
    }

    public function services()
    {
        return view('services');
    }

    public function work_with_us()
    {
        return view('work_with_us');
    }

    public function contact_us()
    {
        return view('contact_us');
    }


}
