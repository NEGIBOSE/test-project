<?php

// app/Http/Controllers/CategoryController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        return view('post.save-category');
    }

    public function store(Request $request)
    {
        $request->validate([
            'selectedIcon' => 'nullable|string',
        ]);

        $category = Category::create([
            'mark' => $request->selectedIcon,
        ]);

        return response()->json(['message' => 'Category saved successfully', 'category_id' => $category->id], 201);
    }
}
