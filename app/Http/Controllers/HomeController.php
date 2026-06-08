<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('fsite.index');
    }

    function about()
    {
        return view('fsite.about');
    }

    function products()
    {
        return view('fsite.products');
    }

    function contact()
    {
        return view('fsite.contact');
    }

    function testimonials()
    {
        return view('fsite.testimonials');
    }
}
