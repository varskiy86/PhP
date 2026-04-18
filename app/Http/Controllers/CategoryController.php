<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('index', compact('categories'));
    }

    public function show(Category $category)
    {
        $ads = $category->ads()->latest()->paginate(10);
        return view('show', compact('category', 'ads'));
    }
}
