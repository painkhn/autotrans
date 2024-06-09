<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware(['auth', 'verified']);
Route::get('/', [HomeController::class, 'index'])->name('index');

require __DIR__.'/auth.php';
