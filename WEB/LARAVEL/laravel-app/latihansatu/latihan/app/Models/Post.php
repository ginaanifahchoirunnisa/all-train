<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['title' ,'category_id','slug', 'excerpt' , 'body'];
    //Agar di controller tidak memerlukan with lagi
    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        // if(isset($filters['search'])?$filters['search']:false){
        //     return $query->where('title', 'like', '%' . request('search') . '%')
        //     ->orWhere('body', 'like', '%' . request('search') . '%');
        // }


        $query->when($filters['search'] ?? false, function($query, $search){
            return $query->where('title', 'like', '%' . $search . '%')
                            ->orWhere('body', 'like', '%' . $search . '%');
        });
        
        $query->when($filters['search'] ?? false, function($query, $category){
            return $query->whereHas('category', function($query) use ($category){
                $query->where('slug', $category);
            });
        });
    }


    public function category()
    {
        return $this->belongsTo(Category::class); //relasi dengan model category

    }

    public function author()
    {
        return $this->belongsTo(User::class,'user_id'); //1 postingan hanya dimiliki oleh 1 user
    }
}
