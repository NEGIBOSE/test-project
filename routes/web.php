<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\Home\IndexController;

use App\Http\Controllers\BookController;

use App\Http\Controllers\PostController;
Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store'])
->name('post.store');

Route::post('/save-book', [BookController::class, 'saveBook']);

// routes/web.php


Route::get('/', function () {
    return view('welcome');
})->name('home'); // 名前付きルートの定義


//test
Route::get('/test', [TestController::class, 'test'])->name('test');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Language Switcher Route 言語切替用ルートだよ
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);

    return redirect()->back();
});

//login
Route::get('/home', function () {
    return view('home'); // 'home'は適切なビュー名に置き換えてください
});


//ホーム
Route::get('/home', \App\Http\Controllers\Home\IndexController::class)
->name('home.index');

//検索
Route::get('/home/search', \App\Http\Controllers\Home\SearchController::class)
->name('home.search');
Route::post('/save-book-data', 'BookController@saveBookData');


//登録
Route::get('/home/register', \App\Http\Controllers\Home\RegisterbookController::class)
->name('home.registerbook');

//読み聞かせ中
Route::get('/home/reading', \App\Http\Controllers\Home\ReadingController::class)
->name('home.reading');

//進化
Route::get('/home/evolute', \App\Http\Controllers\Home\EvoluteController::class)
->name('home.evolute');

//共有
Route::get('/home/share', \App\Http\Controllers\Home\ShareController::class)
->name('home.share');

//成長記録
Route::get('/home/growth', \App\Http\Controllers\Home\GrowthController::class)
->name('home.growth');

//本棚
Route::get('/home/bookshelf', \App\Http\Controllers\Home\BookshelfController::class)
->name('home.bookshelf');

//algorithm test
use App\Http\Controllers\Home\TestalgoController;
Route::get('/home/testalgo', \App\Http\Controllers\Home\TestalgoController::class)
->name('home.testalgo');
Route::post('/store', [TestalgoController::class, 'store']); // POSTリクエストを処理するルート
Route::get('/get-image', [TestalgoController::class, 'getImage']); // GETリクエストを処理するルート

//書籍情報
Route::post('/books', 'BookController@store');
