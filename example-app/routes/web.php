<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Middleware\IsBan;

Route::get('/', [HomeController::class, 'index'])->name('index')->middleware(IsBan::class);
Route::get('/category/{category_name}', [ProductController::class, 'catalog'])->name('catalog')->middleware(IsBan::class);
Route::get('/product/{product_id}', [ProductController::class, 'product'])->name('OpenProduct')->middleware(IsBan::class);
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware(['auth', 'verified', IsBan::class]);

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(IsAdmin::class);
Route::post('/admin/product/add', [AdminController::class, 'addproduct'])->name('addproduct')->middleware(IsAdmin::class);
Route::post('/admin/user/search', [AdminController::class, 'user_search'])->name('UserSearch')->middleware(IsAdmin::class);
Route::get('/admin/user/ban/{user_id}', [AdminController::class, 'ban_user'])->name('BanUser')->middleware(IsAdmin::class);

Route::get('/liked/add/{product_id}', [ProfileController::class, 'add_liked'])->name('ToLike')->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';
