<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class MainController extends Controller
{
    function index()
    {
        return view('index');
    }

    function about()
    {
        return view('about');
    }

    function team()
    {
        return view('team');
    }

    function services()
    {
        return view('services');
    }

    function contact()
    {
        return view('contact');
    }

    function contact_form()
    {
        return view('contact_form');
    }

    function users()
    {
        $users = User::with('identity')->latest()->get();

        return view('users.index', compact('users'));
    }
}
