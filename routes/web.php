<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

use App\Http\Controllers\Home\IndexController;

//save-book
use App\Http\Controllers\BookController;
Route::get('post/save-book', [BookController::class, 'create']);
Route::post('post/save-book', [BookController::class, 'store'])
->name('book.store');

//save-category
use App\Http\Controllers\CategoryController;
Route::get('post/save-category', [CategoryController::class, 'create']);
Route::post('post/save-category', [CategoryController::class, 'store'])
->name('category.store');

//bookshelf表示
Route::get('home/bookshelf', [BookController::class, 'index'])->name('bookshelf.index');

//post
use App\Http\Controllers\PostController;
Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store'])
->name('post.store');
Route::get('post', [PostController::class, 'index']);

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


//登録
Route::get('/home/registerbook', \App\Http\Controllers\Home\RegisterbookController::class)
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

//algorithm test
use App\Http\Controllers\Home\TestalgoController;
Route::get('/home/testalgo', \App\Http\Controllers\Home\TestalgoController::class)
->name('home.testalgo');
Route::post('/store', [TestalgoController::class, 'store']); // POSTリクエストを処理するルート
Route::get('/get-image', [TestalgoController::class, 'getImage']); // GETリクエストを処理するルート