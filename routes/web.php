<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ForgetPasswordManager;
use App\Models\Post;

Route::get("/", function () {
	return view("home", [
		"title" => "Home"
	]);
});

Route::get("/about", function () {
	return view("about", [
		"title" => "About",
		"name" => "Ananda Rizky Sandika",
		"email" => "rizkysandika19@gmail.com"
		// "image" => ""
	]);
});

Route::get("/posts", function () {
	return view("posts", [
		"title" => "Lowongan Magang",
		"posts" => Post::all()
	]);
});

Route::get("/posts/{slug}", function ($slug) {
	return view("posts", [
		"title" => "Single Posts",
		"post" => Post::find($slug)
	]);
});

Route::get("/login", [LoginController::class, "index"])->name("login");

Route::get("/register", [RegisterController::class, "index"]);
Route::post("/register", [RegisterController::class, "store"]);

Route::get("/forget-password", [ForgetPasswordManager::class, "forgetPassword"])->name("forget.password");
Route::post("/forget-password", [ForgetPasswordManager::class, "forgetPasswordPost"])->name("forget.password.post");

Route::get("/reset-password/{token}", [ForgetPasswordManager::class, "resetPassword"])->name("reset.password");
Route::post("/reset-password", [ForgetPasswordManager::class, "resetPasswordPost"])->name("reset.password.post");
