<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Home\IndexController;

// save-image
use App\Http\Controllers\IllustrationController;
Route::get('post/save-image', [IllustrationController::class, 'createImageUrl']);
Route::post('post/save-image', [IllustrationController::class, 'storeImageUrl'])
    ->name('image.store');

// save-book
use App\Http\Controllers\BookController;
Route::get('post/save-book', [BookController::class, 'create']);
Route::post('post/save-book', [BookController::class, 'store'])
    ->name('book.store');

// save-category
use App\Http\Controllers\CategoryController;
Route::get('post/save-category', [CategoryController::class, 'create']);
Route::post('post/save-category', [CategoryController::class, 'store'])
    ->name('category.store');

// bookshelf表示
Route::get('home/bookshelf', [BookController::class, 'index'])->name('home.bookshelf');
Route::get('/search-books', [BookController::class, 'searchBooks'])->name('books.search');

// post
use App\Http\Controllers\PostController;
Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store'])
    ->name('post.store');
Route::get('post', [PostController::class, 'index']);

// 最初の画面をログイン画面に設定
Route::get('/', function () {
    return view('welcome');
})->name('welcome'); // 名前を 'welcome' に変更

// test
Route::get('/test', [TestController::class, 'test'])->name('test');

// dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// Language Switcher Route 言語切替用ルート
Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
});

// home関連のルート設定
Route::get('/home', [IndexController::class, 'index'])->name('home.index');
Route::get('/home/search', \App\Http\Controllers\Home\SearchController::class)->name('home.search');
Route::get('/home/registerbook', \App\Http\Controllers\Home\RegisterbookController::class)->name('home.registerbook');
Route::get('/home/reading', [CategoryController::class, 'showCategoryCount'])->name('home.reading');
Route::get('/home/babyevolute', \App\Http\Controllers\Home\BabyEvoluteController::class)->name('home.babyevolute');
Route::get('/home/adultevolute', \App\Http\Controllers\Home\AdultEvoluteController::class)->name('home.adultevolute');
Route::get('/home/share', \App\Http\Controllers\Home\ShareController::class)->name('home.share');
Route::get('/home/growth', \App\Http\Controllers\Home\GrowthController::class)->name('home.growth');
Route::get('/home/testalgo', \App\Http\Controllers\Home\TestalgoController::class)->name('home.testalgo');
Route::post('/store', [TestalgoController::class, 'store']);
Route::get('/get-image', [TestalgoController::class, 'getImage']);
