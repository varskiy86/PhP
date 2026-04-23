<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Ad;
use Illuminate\Http\Request;

class AdController extends Controller
{
    public function store(Request $request, Category $category)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        $category->title="ty";
        $category->ads="te";
        return redirect()->route('categories.show', $category);
    }
}
