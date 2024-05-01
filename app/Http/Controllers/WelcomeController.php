<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    // show the welcome page
    public function show()
    {
        return view('welcome');
    }

    // show the dashboard
    public function dashboard()
    {
        return view('dashboard');
    }
    
}
