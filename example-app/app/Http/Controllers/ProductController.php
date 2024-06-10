<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog($category_name)
    {
        return view('category');
    }
}
