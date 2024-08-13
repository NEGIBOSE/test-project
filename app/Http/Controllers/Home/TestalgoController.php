<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestalgoController extends Controller
{
    function index()
    {
        return view('home.testalgo');
    }

    public function store(Request $request)
    {
        // ユーザーが選択した画像を保存する
        $user = new User();
        $user->image = $request->input('image');
        $user->save();

        return response()->json(['message' => 'Image saved successfully']);
    }

    public function getImage()
    {
        // 最新のユーザーの画像を取得する
        $user = User::latest()->first();
        return response()->json(['image' => $user->image]);
    }
}