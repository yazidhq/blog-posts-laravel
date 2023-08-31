<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    // all categories
    public function index()
    {
        $data = [
            'title' => 'Categories',
            'categories' => Category::all()
        ];
        return view('categories', $data);
    }

    // Categories
    public function category(Category $category)
    {
        $data = [
            'title' => "Post By Category: $category->name",
            'posts' => $category->posts->load('category', 'user'),
        ];
        return view('posts', $data);
    }
}
