<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PostModel;

class PostController extends Controller
{
    // all posts page
    public function index()
    {
        $data = [
            'title' => 'Posts',
            'posts' => PostModel::all(),
        ];
        return view('posts', $data);
    }

    // single post page
    public function show($slug)
    {
        $data = [
            'title' => 'Single Post',
            'post' => PostModel::find($slug),
        ];
        return view('post', $data);
    }
}
