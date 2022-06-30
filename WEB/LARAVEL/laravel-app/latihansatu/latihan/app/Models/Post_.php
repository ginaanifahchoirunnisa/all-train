<?php

namespace App\Models;



class Post  
{
   private static $data = [
        [
            "title" => "Ini adalah blog satu",
            "desc" => "Lorem ipsum dolor sit amet consectquisquam molestias deleniti, in iste"
        ],
        [
            "title" => "Ini adalah blog dua",
            "desc" => "Lorem ipsum dolor sit amet  enim cum voluptatum quisquam molestias deleniti, in iste"
        ],
        [
            "title" => "Ini adalah blog tiga",
            "desc" => "Lorem ipsum dolor sit Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo animi necessitatibus architecto nam iure ea dolorum isi culpa aut accusamus officia distinctio enim cum voluptatum quisquam molestias d enim cum voluptatum quisquam molestias deleniti, in iste"
        ]
    ];

    public static function all()
    {
        return collect(self::$data);
    }

    public static function find($slug)
    {
        $posts = static :: all();
        return $posts->firstWhere('slug', $slug);
    }
    
}
