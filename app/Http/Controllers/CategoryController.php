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
    public function showCategoryCount()
    {
        $categoryCountMessage = $this->determineCategoryCount();
        return view('home.registerbook')->with('categoryCountMessage', $categoryCountMessage);
    }

    /**
     * カテゴリーの数を確認してメッセージを返す
     *
     * @return string
     */
    public function determineCategoryCount()
    {
        $categoryCount = Category::count();

        if ($categoryCount === 0) {
            return 'まだカテゴリーが登録されていません。';
        } elseif ($categoryCount === 1) {
            return '現在、カテゴリーは1つだけ登録されています。';
        } elseif ($categoryCount === 2) {
            return '現在、カテゴリーは2つ登録されています。';
        } else {
            return '現在、カテゴリーは'.$categoryCount.'個登録されています。';
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

        $category = Category::create([
            'mark' => $request->selectedIcon,
        ]);

        return response()->json(['message' => 'Category saved successfully', 'category_id' => $category->id], 201);
    }
}
