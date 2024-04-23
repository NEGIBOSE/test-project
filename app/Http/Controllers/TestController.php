<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TestController extends Controller
{
    public function test() {
        $users = User::all();
        return view('test', compact('users'));
        // return view('test', ['users'=> $users]); 配列で渡す場合
        // return view('test')->with('users', $users); with関数を使う場合
    }
}
