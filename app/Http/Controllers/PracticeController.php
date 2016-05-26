<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PracticeController extends Controller
{
    // Home page.
    public function home()
    {
        return view("welcome");
    }
    
    // About page.
    public function about()
    {        
        return view("pages.about");
    }
    
    // Contact page.
    public function contact()
    {
        return view("pages.contact");
    }
    
    // Portfolio.
    public function portfolio() 
    {
        return view("pages.portfolio");
    }
}
