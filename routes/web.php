<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/welcome', function () {
//     return view('welcome');
// });

Route::get('/welcome', [WelcomeController::class, 'welcome'])->name('welcome');

Route::get('/', function () {
    return view('index');
});

Route::get('/aboutus', function () {
    return "About us";
});

Route::get('/api', function() {
    return ['key' => "32345K"];
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles');

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail'])->name('detail');

Route::get('/articles/create', [ArticleController::class, 'data'])->name('data');

Route::post('/articles/create', [ArticleController::class, 'create']);
// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
