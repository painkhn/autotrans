<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;
use App\Models\Favorite;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile');
    }
    public function add_liked($product_id)
    {
        // Добавление в избранное
        $status = Favorite::where('user_id', Auth::user()->id)->where('product_id', $product_id)->first();
        if ($status) {
            Favorite::where('id', $status->id)->delete();
        }
        else {
            $data = [
                'user_id' => Auth::user()->id,
                'product_id' => $product_id,
            ];
            Favorite::create($data);
        }
        return redirect()->back();
    }
}
