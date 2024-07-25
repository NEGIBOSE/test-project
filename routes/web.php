<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\Home\IndexController;
use App\Http\Controllers\IllustrationController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Home\SearchController;
use App\Http\Controllers\Home\RegisterbookController;
use App\Http\Controllers\Home\BabyEvoluteController;
use App\Http\Controllers\Home\AdultEvoluteController;
use App\Http\Controllers\Home\ShareController;
use App\Http\Controllers\Home\GrowthController;
use App\Http\Controllers\Home\TestalgoController;

// 最初の画面をログイン画面に設定
Route::get('/', function () {
    return view('welcome');
})->name('login');

// save-image
Route::get('post/save-image', [IllustrationController::class, 'createImageUrl']);
Route::post('post/save-image', [IllustrationController::class, 'storeImageUrl'])
    ->name('image.store');

// save-book
Route::get('post/save-book', [BookController::class, 'create']);
Route::post('post/save-book', [BookController::class, 'store'])
    ->name('book.store');

// save-category
Route::get('post/save-category', [CategoryController::class, 'create']);
Route::post('post/save-category', [CategoryController::class, 'store'])
    ->name('category.store');

// bookshelf表示
Route::get('home/bookshelf', [BookController::class, 'index'])->name('home.bookshelf');
Route::get('/search-books', [BookController::class, 'searchBooks'])->name('books.search');

// post
Route::get('post/create', [PostController::class, 'create']);
Route::post('post', [PostController::class, 'store'])
    ->name('post.store');
Route::get('post', [PostController::class, 'index']);

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
Route::get('/home/search', [SearchController::class, 'index'])->name('home.search');
Route::get('/home/registerbook', [RegisterbookController::class, 'index'])->name('home.registerbook');
Route::get('/home/reading', [CategoryController::class, 'showCategoryCount'])->name('home.reading');
Route::get('/home/babyevolute', [BabyEvoluteController::class, 'index'])->name('home.babyevolute');
Route::get('/home/adultevolute', [AdultEvoluteController::class, 'index'])->name('home.adultevolute');
Route::get('/home/share', [ShareController::class, 'index'])->name('home.share');
Route::get('/home/growth', [GrowthController::class, 'index'])->name('home.growth');
Route::get('/home/testalgo', [TestalgoController::class, 'index'])->name('home.testalgo');
Route::post('/store', [TestalgoController::class, 'store']);
Route::get('/get-image', [TestalgoController::class, 'getImage']);
