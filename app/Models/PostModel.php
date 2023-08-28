<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel
{
    use HasFactory;

    // data dummy
    private static $blog_posts = [
        [
            'title' => 'Judul Post Pertama',
            'slug' => 'judul-post-pertama',
            'author' => 'Yazid Dhiaulhaq',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ipsum consequatur enim repellendus cum quae dolores sapiente corrupti, id et delectus laboriosam dignissimos rem corporis numquam distinctio asperiores? Doloremque, amet.'
        ],
        [
            'title' => 'Judul Post Kedua',
            'slug' => 'judul-post-kedua',
            'author' => 'Andi Saleh',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo ipsum consequatur enim repellendus cum quae dolores sapiente corrupti, id et delectus laboriosam dignissimos rem corporis numquam distinctio asperiores? Doloremque, amet.'
        ],
    ];

    // show all posts
    public static function all()
    {
        // 'self' for statis, 'this' for public regularly
        return collect(self::$blog_posts);
    }

    // show single post
    public static function find($slug)
    {
        // collect for use provided function like a first or firstwhere
        return collect(self::$blog_posts)->firstWhere('slug', $slug);
    }
}
