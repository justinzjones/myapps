<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\PlaceController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/index', function () {
    return view('index');
});

// Route::get('/blog-page', function () {
//     return view('blog_page');
// });

Route::get('/blog-post/{id}', [BlogController::class, 'show']);

Route::get('/blog-posts', [BlogController::class, 'index']);

Route::get('/region/{id}', [PlaceController::class, 'show_region']);

Route::get('/country/{id}', [PlaceController::class, 'show_country']);

Route::get('/place/{id}', [PlaceController::class, 'show_place']);

Route::get('/contact', function () {
    return view('contact');
});


// Route::get('/destination', function () {
//     return view('destination');
// });
