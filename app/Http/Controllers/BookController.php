<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function saveBook(Request $request)
    {
        // バリデーション
        $request->validate([
            'imageUrl' => 'required|string',
            'title' => 'required|string',
            'author' => 'required|string', // author を必須項目として追加
            'icon' => 'nullable|string', // アイコンがある場合
        ]);

        // データベースに保存
        $book = new Book();
        $book->thumbnail_url = $request->imageUrl;
        $book->title = $request->title;
        $book->author = $request->author; // 必須フィールドとして設定
        $book->save();

        return response()->json(['message' => 'Book saved successfully'], 201);
    }
}
