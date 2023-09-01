<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    // all posts page
    public function index()
    {
        // $posts = Post::latest();
        // searching in controller
        // if (request('search')) {
        //     $posts
        //         ->where('title', 'like', '%' . request('search') . '%')
        //         ->orWhere('body', 'like', '%' . request('search') . '%');
        // }

        $title = '';
        if (request('category')) {
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }
        if (request('user')) {
            $user = User::firstWhere('username', request('user'));
            $title = ' by ' . $user->name;
        }
        $data = [
            'title' => 'All Posts' . $title,
            // 'posts' => Post::all(),
            // 'with' for solve n+1 problem
            // filter for search
            // request search send requst data to Post Model
            // 'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->get(),

            // change get to paginate for pagination
            'posts' => Post::latest()->filter(request(['search', 'category', 'user']))->paginate(4)->withQueryString(),
        ];
        return view('posts', $data);
    }

    // single post page
    public function show(Post $post)
    {
        $data = [
            'title' => 'Single Post',
            'post' => $post,
        ];
        return view('post', $data);
    }
}
