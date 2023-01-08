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
    // $blog_posts = Post::all();
    // mengecek persamaan nilai post dan slug
    // $post_contain=[];
    // foreach($blog_posts as $post){
    //     if($post["slug"] === $slug) {//jika post === slug, maka ambil nilai dari data yang sesuai dengan slug tersebut (data terpaksa duplikat karena masih statis)
    //         $post_contain= $post;
    //     }
    // }
    return view('post', [
        "title" => "Single Post",
        "post" => Post::getSinglePost($slug)
    ]);
});
