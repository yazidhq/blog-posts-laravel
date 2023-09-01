<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //Register View
    public function index()
    {
        $data = [
            'title' => 'Register'
        ];
        return view('register.index', $data);
    }
}
