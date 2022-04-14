<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get("/new-post", [PostController::class, "index"])->name("new-post");
Route::post("/new-post", [PostController::class, "store"])->name("create-post");
Route::post("/post-update", [PostController::class, "update"])->name("post-update");
Route::get("/post-delete/{id}", [PostController::class, "destroy"])->name("post-delete");
Route::get("/profile", [ProfileController::class, "index"])->name("profile");
Route::post("/profile-update", [ProfileController::class, "update"])->name("profile-update");
Route::get("/profile-detail/{id}", [ProfileController::class, "show"])->name("profile-detail");
