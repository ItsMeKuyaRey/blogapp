<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

// Default homepage redirects to posts.index
Route::get('/', [PostController::class, 'index'])->name('home');

// Post Routes
Route::get('posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
Route::resource('posts', PostController::class)->except(['create', 'store', 'index']);

// Authentication Routes
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('register.store'); // Named route for form submission
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.store'); // Named for consistency
Route::post('/logout', [AuthController::class, 'logout'])->middleware('auth')->name('logout');

// Dashboard Route (only accessible to authenticated users)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth')->name('dashboard');