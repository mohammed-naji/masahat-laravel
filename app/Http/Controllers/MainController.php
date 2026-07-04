<?php

namespace App\Http\Controllers;

use App\Models\Identity;
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

    function identity(Request $request)
    {
        if ($request->wantsJson()) {
            if ($request->has('id')) {
                $identity = Identity::find($request->id);
                if ($identity) {
                    $user = $identity->user;
                    return [
                        'msg' => 'User Found',
                        'user' => $user
                    ];
                } else {
                    return [
                        'msg' => 'User Not Found',
                        'user' => []
                    ];
                }
            }
        }

        return view('users.identity');
    }
}
