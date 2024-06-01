<?php

// app/Http/Controllers/BookController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
    public function create()
    {
        return view('post.save-book');
    }

    public function store(Request $request)
    {
        $request->validate([
            'selectedImageUrl' => 'required|string',
            'selectedTitle' => 'required|string',
            'categoryId' => 'required|exists:categories,id',  // カテゴリIDのバリデーション
        ]);

        $book = Book::create([
            'thumbnail_url' => $request->selectedImageUrl,
            'title' => $request->selectedTitle,
            'category_id' => $request->categoryId,  // カテゴリIDを保存
        ]);

        return response()->json(['message' => 'Book saved successfully'], 201);
    }

    public function index()
    {
        $books = Book::with('category')->get();
        return view('home.bookshelf', compact('books'));
    }

    public function searchBooks(Request $request)
    {
        $query = $request->input('query');
        $sort = $request->input('sort', 'latest');

        $books = Book::where('title', 'like', '%' . $query . '%');

        if ($sort == 'latest') {
            $books = $books->orderBy('created_at', 'desc');
        } elseif ($sort == 'oldest') {
            $books = $books->orderBy('created_at', 'asc');
        } elseif ($sort == 'name') {
            $books = $books->orderBy('title', 'asc');
        }

        $books = $books->get();

        return response()->json($books);
    }
}
