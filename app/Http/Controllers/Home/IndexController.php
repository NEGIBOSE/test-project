<?php

// app/Http/Controllers/Home/IndexController.php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Illustration; // Illustration モデルをインポート


class IndexController extends Controller
{
    public function __invoke()
    {
        $categories = Category::all();
        $illustrations = Illustration::all(); // Illustration モデルからすべてのデータを取得
        return view('home.index', compact('categories', 'illustrations'));
    }
}
