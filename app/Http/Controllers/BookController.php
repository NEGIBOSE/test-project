<?php

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
