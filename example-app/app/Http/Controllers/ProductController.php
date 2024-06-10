<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Favorite;
use Auth;

class ProductController extends Controller
{
    public function catalog($category_name)
    {
        $tovars = Category::with('products')->where('link', $category_name)->first();
        return view('category', ['category' => $tovars]);
    }
    public function product($product_id)
    {
        $random = Product::inRandomOrder()->take(3)->get();
        $tovar = Product::with('category')->where('id', $product_id)->first();
        $like = Favorite::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
        return view('product', ['tovar' => $tovar, 'random' => $random, 'like' => $like]);
    }
}
