<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookshelfController extends Controller
{
    /**
     * Handle the incoming request.
     */
    function index()
    {
        return view('home.bookshelf');
    }
}