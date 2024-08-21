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
        
        // ログインユーザーの取得
        $user = auth()->user();

        // ユーザーに関連する最新のIllustrationデータを取得
        $latestIllustration = Illustration::where('user_id', $user->id)->latest()->first();

        $categories = Category::all();
        
        // Illustrationデータが存在しない場合はデフォルトの画像パスを設定
        $defaultImage = 'images/BABY.png';
        return view('home.index', compact('categories', 'latestIllustration', 'defaultImage'));
    }
}
