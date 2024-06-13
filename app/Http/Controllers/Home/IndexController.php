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
        $latestIllustration = Illustration::latest()->first(); // 最新の1件のIllustrationデータを取得
        return view('home.index', compact('categories', 'latestIllustration'));
    }
}
