<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DevController extends Controller
{
    function info()
    {
        $dev = [
            'name' => 'Mohammed Naji',
            'email' => 'moh@gmail.com',
            'phone' => 123456,
            'age' => 32
        ];

        return $dev;
    }
}
