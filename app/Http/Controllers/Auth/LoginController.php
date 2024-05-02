<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // ログイン後のリダイレクト先を記述
    public function redirectPath()
    {
        return 'home/index';
    }
}
