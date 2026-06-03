<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // this data will come from database
        // $categories = Category::all();
        // SELECT * FROM categories;
        $categories = [
            [
                'id' => 1,
                'name' => 'Sport'
            ],
            [
                'id' => 2,
                'name' => 'Health'
            ],
            [
                'id' => 3,
                'name' => 'War'
            ],
            [
                'id' => 4,
                'name' => 'Action'
            ],
            [
                'id' => 5,
                'name' => 'Drama'
            ],
            [
                'id' => 6,
                'name' => 'Romance'
            ],
        ];

        // $dev_name = "Mohammed Naji";

        // return view('admin.categories.index')->with('categories', $categories);
        return view('admin.categories.index', compact('categories'));
    }
}
