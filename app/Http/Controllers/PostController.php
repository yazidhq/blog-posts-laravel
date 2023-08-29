<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    // all posts page
    public function index()
    {
        $data = [
            'title' => 'Posts',
            'posts' => Post::all(),
        ];
        return view('posts', $data);
    }

    // single post page
    public function show(Post $post)
    {
        $data = [
            'title' => 'Single Post',
            'post' => $post,
            'category' => $post->category,
        ];
        return view('post', $data);
    }
}
