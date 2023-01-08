<?php

use App\Models\Post;
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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "Ghina Khoirunnisa",
        "kuliah" => "Politeknik Negeri Bandung",
        "email" => "anifahgina@gmail.com"
    ]);
});



Route::get('/blog', function () {
    // dummy data
    
    return view('posts', [
        "title" => "Blog",
        "posts" => Post::all()
    ]);
});

// single post
Route::get('posts/{slug}', function($slug){
    return view('post', [
        "title" => "Single Post",
        "post" => Post::getSinglePost($slug)
    ]);
});
