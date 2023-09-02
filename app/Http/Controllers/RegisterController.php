<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

use App\Models\User;

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

    // saving data register
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => [
                'required',
                'min:3',
                'unique:users'
            ],
            'email' => [
                'required',
                'email:dns',
                'unique:users'
            ],
            'password' => [
                'required',
                'min:5',
                'max:255',
            ],
        ]);
        // hashing or encrypting password 
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // session flash for notification
        // Session::flash('success', 'Registration successfull! Please Login');

        return redirect('/login')->with('success', 'Registration successfull! Please Login');
    }
}
