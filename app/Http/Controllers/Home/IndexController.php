<?php

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
        
        // ユーザーがログインしていない場合の処理
        if (!$user) {
            // ログインしていない場合、適切な対応をするか、リダイレクトする
            return redirect()->route('login'); // ログインページにリダイレクト
        }

        // ユーザーに関連する最新のIllustrationデータを取得
        $latestIllustration = Illustration::where('user_id', $user->id)->latest()->first();

        // カテゴリーデータの取得（ユーザーに関連するもの）
        $categories = Category::where('user_id', $user->id)->get();
        
        // Illustrationデータが存在しない場合はデフォルトの画像パスを設定
        $defaultImage = 'images/BABY.png';

        // ビューにデータを渡す
        return view('home.index', compact('categories', 'latestIllustration', 'defaultImage'));
    }
}
