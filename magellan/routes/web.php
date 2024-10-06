<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/home', function () {
    return view('home');
});

Route::get('/', [ArticleController::class, 'index']);

Route::get('/news', [ArticleController::class, 'index_news']);

Route::get('/travel', [ArticleController::class, 'index_travel']);

Route::get('/aviation', [ArticleController::class, 'index_aviation']);

Route::get('/markets', [ArticleController::class, 'index_markets']);

// Route::get('/articles/{id}', [ArticleController::class, 'show']);
Route::get('{category}/articles/{article}', [ArticleController::class, 'show'])->name('articles.show');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
