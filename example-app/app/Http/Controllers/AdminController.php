<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
        $country = Category::get();
        return view('admin', ['country' => $country]);    
    }
    public function addproduct(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'engine' => 'required|string',
            'power' => 'required|string',
            'transmission' => 'required|string',
            'drive' => 'required|string',
            'color' => 'required|string',
            'rudder' => 'required|string',
            'country_id' => 'required',
            'equipment' => 'required|string',
            'generation' => 'required|string',
            'description' => 'required|string',
            'photo' => 'required|image|mimes:jpg,png,jpeg,webp|max:2048'
        ]);

        $name = time(). "." . $request->photo->extension();
        $destination = 'public/products';
        $path = $request->photo->storeAs($destination, $name);
        $data = [
            'name' => $request->name,
            'price' => $request->price,
            'engine' => $request->engine,
            'power' => $request->power,
            'transmission' => $request->transmission,
            'drive' => $request->drive,
            'color' => $request->color,
            'rudder' => $request->rudder,
            'country_id' => $request->country_id,
            'equipment' => $request->equipment,
            'generation' => $request->generation,
            'description' => $request->description,
            'photo' => 'storage/products/' . $name,
        ];
        Product::create($data);

        return redirect()->back();
    }
}
