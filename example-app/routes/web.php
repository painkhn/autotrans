<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/category/{category_name}', [ProductController::class, 'catalog'])->name('catalog');
Route::get('/product/{product_id}', [ProductController::class, 'product'])->name('OpenProduct');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware(['auth', 'verified']);

Route::get('/admin', [AdminController::class, 'index'])->name('admin')->middleware(IsAdmin::class);
Route::post('/admin/product/add', [AdminController::class, 'addproduct'])->name('addproduct')->middleware(IsAdmin::class);

require __DIR__.'/auth.php';
