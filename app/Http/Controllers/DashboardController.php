<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //index view
    public function index()
    {
        $data = [
            'title' => 'Dashboard',
        ];
        return view('dashboard.index', $data);
    }
}
