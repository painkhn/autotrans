<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;

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
            'price' => 'required|numeric|gt:0',
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
    public function user_search(Request $request)
    {
        $word = $request->word;
        $positions = User::where('email', 'like', "%{$word}%")->orderBy('id')->get();
        return redirect()->back()->with('positions', $positions);
    }
    public function ban_user($user_id)
    {
        $user = User::where('id', $user_id)->first();
        $ban = ($user->is_ban == 1) ? 0 : 1;
        User::where('id', $user_id)->update([
            'is_ban' => $ban
        ]);
        return redirect()->back();
    }
    public function del_product($product_id)
    {
        Product::where('id', $product_id)->delete();
        return redirect()->back();
    }
    public function edit_product($product_id)
    {
        return view('edit', ['product' => Product::where('id', $product_id)->first(), 
                            'country' => Category::get()]);
    }
    public function Save_edit_product($product_id, Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric|gt:0',
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
        ]);

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
        ];
        Product::where('id', $product_id)->update($data);
        return redirect()->back();
    }
}
