<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Homepage 
    public function index() 
    {
        return view('home');
    }
    // About us page
    public function about() 
    {
        return view('about-us');
    }
    // Contact us page
    public function contact() 
    {
        return view('contact-us');
    }
}
