<?php

// app/Http/Controllers/Home/IndexController.php
namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Illustration; // Illustration モデルをインポート

class IndexController extends Controller
{
    public function index()
    {
        // ログインユーザーの取得
        $user = auth()->user();

        if (!$user) {
            // ユーザーがログインしていない場合の処理
            return redirect()->route('login')->with('error', 'ログインが必要です');
        }

        // ユーザーに関連する最新のIllustrationデータを取得
        $latestIllustration = Illustration::where('user_id', $user->id)->latest()->first();

        // カテゴリの取得
        $categories = Category::all();
        
        // Illustrationデータが存在しない場合はデフォルトの画像パスを設定
        $defaultImage = 'images/BABY.png';

        // ビューにデータを渡す
        return view('home.index', [
            'categories' => $categories,
            'latestIllustration' => $latestIllustration ?? (object) ['image_url' => $defaultImage], // Illustrationがnullの場合はデフォルト画像を設定
            'defaultImage' => $defaultImage
        ]);
    }
}
