<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Illustration; // Illustrationモデルをインポート

class GrowthController extends Controller
{
    public function __invoke(Request $request)
    {
        // Illustrationテーブルからすべてのデータを取得
        $illustrations = Illustration::all();

        // growth.blade.phpビューを表示し、illustrationsを渡す
        return view('home.growth', compact('illustrations'));
    }
}
