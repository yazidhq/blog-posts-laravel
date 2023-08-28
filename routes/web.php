<?php

use App\Http\Controllers\PostController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// main page
Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

// about page
Route::get('/about', function () {
    return view('about', [
        'title' => 'About',
        'name' => 'Yazid Dhiaulhaq Ismail',
        'email' => 'yazidhq@gmail.com'
    ]);
});

// posts page
Route::get('/posts', [PostController::class, 'index']);

// single post page
Route::get('posts/{slug}', [PostController::class, 'show']);
