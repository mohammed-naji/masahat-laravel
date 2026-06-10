<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormsController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        // dd($request->all());
        // dd($request->except('_token'));
        // $data = $request->all(); // array
        // dd($data['query']); // string

        // $email = $request->input('email');
        // $password = $request->input('password');

        $email = $request->email;
        $password = $request->password;

        dd($email, $password);
    }

    function form2()
    {
        return view('forms.form2');
    }

    function form2_data(Request $request)
    {
        // dd($request->all());
        // 1. validation

        // 2. save files

        // 3. actions & statements
        $name = $request->name;
        $dob = $request->dob;

        $year = explode('-', $dob)[0];

        // 4. redirect

        if ($year >= 2000) {
            return view('forms.genz', compact('name', 'year'));
        }
        return 'Old Man :////';
    }

    function register()
    {
        return view('forms.register');
    }

    function register_data(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'password' => 'required|confirmed',
        ]);

        dd($request->all());
    }
}
