<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * ビューにカテゴリー数を渡して表示
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(){
        return view('post.save-category');
    }
    public function showCategoryCount()
    {
        $categoryCountMessage = $this->determineCategoryCount();
        return view('home.reading')->with('categoryCountMessage', $categoryCountMessage);
    }

    /**
     * カテゴリーの数を確認してメッセージを返す
     *
     * @return string
     */
    public function determineCategoryCount()
    {
        $user = auth()->user();

        // デバッグ用にログを追加
        \Log::info('User ID: ' . $user->id);

        $categoryCount = Category::where('user_id', $user->id)->count();

        // デバッグ用にカウント値もログに記録
        \Log::info('Category Count: ' . $categoryCount);

        if ($categoryCount === 1) {
            return 'まだカテゴリーが登録されていません。(この本は初めての本です)';
        } elseif ($categoryCount === 2) {
            return '現在、カテゴリーは1つだけ登録されています。（この本は2冊目です）';
        } elseif ($categoryCount === 3) {
            return '現在、カテゴリーは2つ登録されています。';
        } else {
            return '現在、カテゴリーは'.$categoryCount.'個登録されています。（この本で'.$categoryCount.'2冊目です）';
        }
    }


    /**
     * 新しいカテゴリーを作成する
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'selectedIcon' => 'nullable|string',
        ]);

        // ユーザーを取得
        $user = auth()->user();

        // ユーザーがログインしていない場合の処理
        if (!$user) {
            return response()->json(['message' => 'ユーザーがログインしていません'], 403);
        }

        // カテゴリーを作成
        $category = Category::create([
            'mark' => $request->selectedIcon,
            'user_id' => $user->id, // user_id を設定
        ]);

        return response()->json(['message' => 'Category saved successfully', 'category_id' => $category->id], 201);
    }

}
