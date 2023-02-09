<?php

namespace App\Models;

class Post{
    private static $blog_posts = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "eli",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In nobis a quam unde consequuntur vel id aspernatur, possimus et quisquam sit ipsum veritatis reiciendis rerum cupiditate? At corporis error ab!"
        ],
    
        [
            "title" => "Judul post LOI",
            "slug" => "judul-post-kedua",
            "author" => "loi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. In nobis a quam unde consequuntur vel id aspernatur, possimus et quisquam sit ipsum veritatis reiciendis rerum cupiditate? At corporis error ab!"
        ],
    ];
    
    public static function all(){
        return collect(self::$blog_posts); //data
    }

    public static function find($slug){
        $posts = static::all();
        
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
    
}




?>