<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PracticeController extends Controller
{
    /**
     * Returns home page view.
     * 
     * @return Response 
     */         
    public function index()
    {
        return view('welcome');
    }

    /**
     * Returns about page view.
     * 
     * @return Response
     */                                 
    public function about()
    {        
        return view('pages.about');
    }

    /**
     * Returns contact page view.
     * 
     * @return Response
     */ 
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Returns portfolio page view.
     * 
     * @return Response
     */
    public function portfolio() 
    {
        return view('pages.portfolio');
    }

    /**
     * Returns skills page view.
     * 
     * @return Response 
     */
    public function skills()
    {
        return view('pages.skills');
    }
}
