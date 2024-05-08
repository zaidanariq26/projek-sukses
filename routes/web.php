<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Models\Post;

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Ananda Rizky Sandika",
        "email" => "rizkysandika19@gmail.com"
        // "image" => ""
    ]);
});

Route::get('/posts', function () {
    return view('posts', [
        "title" => "Lowongan Magang",
        "posts" => Post::all()

    ]);
});


Route::get('/posts/{slug}', function ($slug) {
    return view('posts', [
        "title" => "Single Posts",
        "post" => Post::find($slug)

    ]);
});

Route::get('/login', [LoginController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
