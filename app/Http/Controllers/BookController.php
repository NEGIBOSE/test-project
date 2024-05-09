<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function store(Request $request)
    {
        // リクエストから書籍情報を取得
        $title = $request->input('title');
        $author = $request->input('author');
        $thumbnailUrl = $request->input('thumbnail_url');

        // Bookモデルを使ってデータベースに保存
        $book = new Book();
        $book->title = $title;
        $book->author = $author;
        $book->thumbnail_url = $thumbnailUrl;
        $book->save();

        // 成功した場合の処理を追加する

        return response()->json(['message' => 'Book created successfully'], 201);
    }
}
