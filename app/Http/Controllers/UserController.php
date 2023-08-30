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
            'title' => $user->name . "'s Post",
            'posts' => $user->posts,
        ];
        return view('user_posts', $data);
    }
}
