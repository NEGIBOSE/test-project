<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        // リソース作成用のフォームを表示するビューを返す
        return view('post.save-category');
    }

    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'selectedIcon' => 'nullable|string',
        ]);

        // データベースに保存
        $category = new Category();
        $category->mark = $request->selectedIcon;
        $category->save();

        // リダイレクトまたはレスポンスを返す
        return response()->json(['message' => 'category saved successfully'], 201);
    }
}
