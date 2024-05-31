<?php

// BookController.php
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
        ]);

        $book = new Book();
        $book->thumbnail_url = $request->selectedImageUrl;
        $book->title = $request->selectedTitle;
        $book->save();

        return response()->json(['message' => 'Book saved successfully'], 201);
    }

    public function index()
    {
        $books = Book::all();
        return view('home.bookshelf', compact('books'));
    }

    public function searchBooks(Request $request)
    {
        $query = $request->input('query');
        $books = Book::where('title', 'LIKE', "%{$query}%")->get();
        return response()->json($books);
    }
}
