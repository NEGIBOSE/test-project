<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        // リソース作成用のフォームを表示するビューを返す
        return view('post.save-book');
    }

    public function store(Request $request)
    {
        // バリデーション
        $request->validate([
            'selectedImageUrl' => 'required|string',
            'selectedTitle' => 'required|string',
        ]);

        // データベースに保存
        $book = new Book();
        $book->thumbnail_url = $request->selectedImageUrl;
        $book->title = $request->selectedTitle;
        $book->save();

        // リダイレクトまたはレスポンスを返す
        return response()->json(['message' => 'Book saved successfully'], 201);
    }
}
