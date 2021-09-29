<?php

namespace App\Models;

class Post 
{
    private static $blog_posts = [
        [
            "title" => "judul 1",
            "slug" => "judul-1",
            "author" => "mamang",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque incidunt commodi, dolorem illum blanditiis optio aperiam sed laudantium non possimus maxime facilis adipisci id odit eaque voluptas. Molestiae nostrum aspernatur nobis, adipisci quas dolores modi dolorem repudiandae omnis quis illo, tenetur ullam quo inventore eaque nemo quod. Natus nemo maxime unde quod vero quidem error dolore dignissimos suscipit nobis corporis aliquam optio deleniti explicabo, nisi veniam commodi modi neque, officia minus ex repellat. Ad dolor architecto labore sint error asperiores."
        ],
        [
            "title" => "judul 2",
            "slug" => "judul-2",
            "author" => "budi",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque incidunt commodi, dolorem illum blanditiis optio aperiam sed laudantium non possimus maxime facilis adipisci id odit eaque voluptas. Molestiae nostrum aspernatur nobis, adipisci quas dolores modi dolorem repudiandae omnis quis illo, tenetur ullam quo inventore eaque nemo quod."
        ],
    ];

    public static function all() {
        return collect(self::$blog_posts);
    }

    public static function find($slug) {
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
