<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    // show all post from user where id
    public function index(User $user)
    {
        $data = [
            'title' => "Post By Author: $user->name",
            // load for solve n+1 problem
            'posts' => $user->posts->load('category', 'user'),
        ];
        return view('posts', $data);
    }
}
