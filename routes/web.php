<?php

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Home')->name('home');


Route::get('register', [RegisterController::class, 'showRegister'])->name('register');
Route::get('login', [RegisterController::class, 'showLogin'])->name('login');
Route::get('shop', [RegisterController::class, 'register'])->name('shop');
Route::get('contact', [RegisterController::class, 'register'])->name('contact');
