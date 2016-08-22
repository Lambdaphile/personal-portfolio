<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Returns home page view.
     * 
     * @return Response 
     */         
    public function portfolio()
    {
        return view('pages.portfolio');
    }

    /**
     * Returns blog page view.
     * 
     * @return Response 
     */
    public function blog()
    {
        return view('pages.blog');
    }
}
