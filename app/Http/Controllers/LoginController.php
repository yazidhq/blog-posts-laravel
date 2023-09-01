<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Login View
    public function index()
    {
        $data = [
            'title' => 'Login'
        ];
        return view('login.index', $data);
    }
}
