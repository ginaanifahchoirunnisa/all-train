<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['name' ,'slug'];

    public function posts() //harus sesuai dengan routes, di $Category->posts     <-- ini
    {
        return $this->hasMany(Post::class); //satu kategori dimiliki oleh banyak post
    }
}
