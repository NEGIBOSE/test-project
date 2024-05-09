<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function redirectTo()
    {
        return '/home';
    }
    
    protected function authenticated(Request $request, $user)
    {
    return redirect('/home'); // ログイン後にリダイレクトされるページのURLを設定
    }

    
    // ログアウト後のリダイレクト先を指定
    protected function loggedOut(Request $request)
    {
        return redirect('/login'); // ログイン画面にリダイレクト
    }

}
