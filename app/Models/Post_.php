<?php

namespace App\Models;


class Post
{
    private static $blog_posts = [
        [
            "title" => "Post Yovan",
            "slug" => "post-pertama",
            "author" => "Yovan Dermawan",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime placeat quisquam, temporibus soluta, a, ex nam asperiores quam similique distinctio error. Omnis velit illo optio, aut quam, nihil labore cupiditate sapiente dolores nisi adipisci tempora doloribus consequuntur eos quos, itaque doloremque. Quia vel obcaecati adipisci velit qui animi, modi eligendi? Obcaecati tempora aliquid impedit, nisi id nostrum enim ex atque quasi neque animi corporis voluptatibus dolorum placeat consequatur incidunt velit quo alias nesciunt, maiores perferendis rem cum excepturi. Commodi quae voluptatibus, tenetur quaerat consectetur ad."
        ],
    
        [
            "title" => "Post Dinda",
            "slug" => "post-kedua",
            "author" => "Afifah Dinda Tri Lestari",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum optio repellat error dolorum. Tempore, dolores omnis consequatur corrupti impedit eligendi non unde eveniet facere sint dicta, perferendis repudiandae excepturi aliquid eaque veritatis dolorum, vero error voluptate harum quis. Incidunt culpa deleniti quo ut adipisci, provident deserunt iure amet maxime impedit, libero nulla assumenda? Numquam aut ex, voluptas neque officia nesciunt ipsum sequi! Maiores, facilis animi nesciunt enim minima inventore molestias eligendi ad itaque quo laboriosam alias tempore similique obcaecati id cumque. Esse rem quo modi ea pariatur beatae non suscipit nemo veritatis, alias, saepe provident, iusto numquam consequuntur! Deserunt, amet."
        ],

    
        ];

    public static function All(){
        return collect(self::$blog_posts);
    }
    public static function find($slug){
        $posts = static::All();
        
        return $posts->firstWhere('slug', $slug);
    }
}

