<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardPostController;

use Illuminate\Support\Facades\Route;

use App\Models\Category;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/posts/{post:slug}', [PostController::class, 'show']);

// all categories
// Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Categories',
        'categories' => Category::all()
    ]);
});

// tidak digunakan lagi karna kategori dan user join table dengan post dan diambil dari url(get)
// // category
// Route::get('/categories/{category:slug}', [CategoryController::class, 'category']);
// // all posts by user
// Route::get('/user/{user:username}', [UserController::class, 'index']);

// Login routes with Middleware and Logout (using name for route name, check Middleware/Authenticate.php for name)
Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

// Register routes
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// dasboard routes index
Route::get('/dashboard', function () {
    return view('dashboard.index', ['title' => 'Dashboard']);
})->middleware('auth');


Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('auth');
