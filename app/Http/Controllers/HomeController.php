<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function demo()
    {
        return view('demo');
    
    }
    public function home()
    {
        return view('home');
    }
}
