<?php

namespace App\Models;



class Post 
{
    private static $blog_posts=[
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

    public static function all(){
        return self::$blog_posts; 
    }
    
}
