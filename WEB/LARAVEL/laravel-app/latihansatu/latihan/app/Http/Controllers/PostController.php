<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
// perlu diingat : controller menghubungkan antara view dan model
class PostController extends Controller
{
    //merupakan index awal basic yang akan di run pertama kali
    public function index()
    {
        $posts = Post::latest(); //ambil data "post" dan urutkan dari yang paling akhir

        //cek apakah ada pencarian
        //search adalah name dari form pencarian nya
        // if(request('search')){
        //     $posts->where('title', 'like', '%' . request('search') . '%')
        //     ->orWhere('body', 'like', '%' . request('search') . '%');
        // }
        
        // dd(request('search')); //ambil dari request
        return view('posts', [
            "title" => "All Posts",
            "active" => "posts",
            
           // "posts" => Post::all() melakukan pengambilan data dari objek yang sifatnya static
           //"posts" => Post::with(['author','category' ])->latest()->get() //agar yang terakhir dimasukin tampil paling atas
           "posts" => Post::latest()->filter(request(['search','category']))->get() 
           //pake array pada 'search' karena ingin digunakan untuk kepentingan pencarian yang lain
        ]);
    }
    
   public function show(Post $post) 
   {
        return view('post',[
            "title" => "post",
            "active" => "posts",
            "post" => $post // akan mengirimkan data ke halaman post
        ]);
   }
}
