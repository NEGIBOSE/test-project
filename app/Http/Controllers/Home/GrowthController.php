<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Illustration;
use Illuminate\Support\Facades\Auth; // Authファサードをインポート

class GrowthController extends Controller
{
    public function index()
    {
        // 現在の認証されたユーザーを取得
        $user = Auth::user();

        // 現在のユーザーに関連付けられたイラストを取得
        $illustrations = $user->illustrations;

        // growth.blade.phpビューを表示し、illustrationsを渡す
        return view('home.growth', compact('illustrations'));
    }
}
