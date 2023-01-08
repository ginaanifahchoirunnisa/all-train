<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;

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
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Gina Anifah Choirunnisa",
            "body" => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quis excepturi ipsam exercitationem maiores molestias doloribus magnam repellat nobis voluptatibus iste explicabo ratione aperiam nulla fugit quibusdam, sed, voluptatum suscipit quisquam quod ipsum obcaecati voluptate. Placeat labore sint ipsum fuga quae. Incidunt cumque voluptatem quidem est ipsum quod alias atque, ea cum commodi dolor maiores deleniti voluptatibus nam temporibus, nesciunt minus. Repellendus praesentium maxime blanditiis ipsum illo iure distinctio laudantium. Aliquid vero libero enim eaque quae vel rem unde eum."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Syahrilan Nasution",
            "body" => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quis excepturi ipsam exercitationem maiores molestias doloribus magnam repellat nobis voluptatibus iste explicabo ratione aperiam nulla fugit quibusdam, sed, voluptatum suscipit quisquam quod ipsum obcaecati voluptate. Placeat labore sint ipsum fuga quae. Incidunt cumque voluptatem quidem est ipsum quod alias atque, ea cum commodi dolor maiores deleniti voluptatibus nam temporibus, nesciunt minus. Repellendus praesentium maxime blanditiis ipsum illo iure distinctio laudantium. Aliquid vero libero enim eaque quae vel rem unde eum."
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Nur Anisyah",
            "body" => "
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam quis excepturi ipsam exercitationem maiores molestias doloribus magnam repellat nobis voluptatibus iste explicabo ratione aperiam nulla fugit quibusdam, sed, voluptatum suscipit quisquam quod ipsum obcaecati voluptate. Placeat labore sint ipsum fuga quae. Incidunt cumque voluptatem quidem est ipsum quod alias atque, ea cum commodi dolor maiores deleniti voluptatibus nam temporibus, nesciunt minus. Repellendus praesentium maxime blanditiis ipsum illo iure distinctio laudantium. Aliquid vero libero enim eaque quae vel rem unde eum."
        ]
    ];

    // mengecek persamaan nilai post dan slug
    $post_contain=[];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug) {//jika post === slug, maka ambil nilai dari data yang sesuai dengan slug tersebut (data terpaksa duplikat karena masih statis)
            $post_contain= $post;
        }
    }
    return view('post', [
        "title" => "Single Post",
        "post" => $post_contain
    ]);
});
