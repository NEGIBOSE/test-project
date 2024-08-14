<?php

// app/Http/Controllers/Home/IndexController.php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Illustration; // Illustration モデルをインポート

class IndexController extends Controller
{
    function index()
    {
        // ここで生成されるURLを確認
        // dd(secure_url(route('logout')));
        
        $categories = Category::all();
        $latestIllustration = Illustration::latest()->first(); // 最新の1件のIllustrationデータを取得
        
        // Illustrationデータが存在しない場合はデフォルトの画像パスを設定
        $defaultImage = 'images/BABY.png';
        return view('home.index', compact('categories', 'latestIllustration', 'defaultImage'));
    }
}
