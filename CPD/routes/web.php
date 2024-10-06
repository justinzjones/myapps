<?php

// use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
// use Illuminate\Http\Request; 
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



// Route::view('/dashboard2', 'dashboard2');
Route::get('/settings2', function () {
    return view('settings2');
});

Route::get('/settings4', function () {
    return view('settings4');
});

Route::get('/dashboard2', function () {
    return view('dashboard2');
});

Route::get('/settings', function () {
    return view('settings');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/elements', [HomeController::class, 'elements']);

Route::get('/spreedly', [HomeController::class, 'spreedly']);
Route::get('/checkout', [HomeController::class, 'spreedly_checkoot']);

Route::get('/stripe-b', [HomeController::class, 'elements2']);
Route::get('/stripec', [HomeController::class, 'stripec']);
// initialize stripec
Route::get('/stripec_init', [HomeController::class, 'stripec_init']);

Route::get('/elements2', [HomeController::class, 'elements2']);

Route::get('/create_pi', [HomeController::class, 'create_pi']);


Route::get('/settings3', function () {
    return view('settings3');
});

Route::get('/bridge', function () {
    return view('bridge');
});




Route::get('/posts/{id}', [PostController::class, 'show']);

Route::get('/justin', [HomeController::class, 'index']);

Route::get('/sdk-review', [HomeController::class, 'sdk_review']);

Route::post('/sdk-pay', [HomeController::class, 'sdk_pay']);

Route::get('/hpp', function () {
    return view('hpp');
});

Route::get('/hpp2', function () {
    return view('hpp2');
});

Route::get('/hpp3', function () {
    return view('hpp3');
});

Route::get('/hppx', function () {
    return view('hppx');
});





