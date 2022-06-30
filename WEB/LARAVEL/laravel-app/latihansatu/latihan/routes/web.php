<?php

use App\Http\Controllers\PostController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\User;

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
    return view('home',[
        "title" => "home",
        "active" => "home"
    ]);
});


Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => "about",
        "nama" => "Ginza",
        "kelas" => "2a d3 TI"
    ]);
});


//('method url' ,[controllernya apa , 'nama methodnya'])
Route::get('/blog', [PostController::class, 'index']);

Route::get('/blog/{post:slug}', [PostController::class, 'show']);

Route::get('/categories/{category:slug}', function(Category $category){
    return view('posts', [
        'title' => "Post By Category : $category->name",
        'active' => 'categories',
        'posts' => $category->posts->load('author','category'),//<=== sesuaikan dengan nama relasi nya , bukan dengan nama model-nya , ambil data *category* lalu liat postnya berdasar kategori tadi //mengambil data posts yang ada pada per-kategori
        //'category' => $category->name
    ]);
});

Route::get('/categories', function(){
        return view('categories', [
            'title' => 'Post Categories',
            'active' => 'categories',
            'categories' => Category::all() //akan mengambil dari model Category
        ]);
});

Route::get('/authors/{author:username}',function(User $author){ //kita pake routes model binding
    return view('posts',[
        'title' => "Post By Author : $author->name",
        'active' => 'categories',
        'posts' =>  $author->posts->load('category','author') //diambil dari relas
        //$author->posts   <--- diambil dari relasi yang dibuat pada Model tsb, dimana di model author terdapat relasi dengan name *posts*
    ]);
});
