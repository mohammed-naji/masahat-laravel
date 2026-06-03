<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        $name = "Sama";
        $age = 3;

        // dd(compact('name', 'age'));

        // return view('front.index')
        //     ->with('name', $name)
        //     ->with('age', $age);

        // return view('front.index', [
        //     'name' => $name,
        //     'age' => $age
        // ]);
        return view('front/index', compact('name', 'age'));
    }

    public function age($name, $year)
    {
        $years = date('Y') - $year;
        $months = $years * 12;
        $days = $years * 365;
        $hours = $years * 365 * 60;

        // dd($name, $years, $months, $days, $hours);
        return view('front.age', compact('name', 'years', 'months', 'days', 'hours'));
    }
}
