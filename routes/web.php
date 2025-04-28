<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

// Default homepage redirects to posts.index
Route::get('/', [PostController::class, 'index'])->name('home');


Route::get('posts', [PostController::class, 'index'])->name('posts.index');


// Post Routes
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store');

// Resourceful routes (index, create, store, show, edit, update, destroy)
Route::resource('posts', PostController::class)->except(['create', 'store', 'index']);
