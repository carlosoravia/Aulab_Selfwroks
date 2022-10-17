<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\publicController;
use App\Models\Article;

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


Route::get('/' , [publicController::class, 'home'])->name('home');

Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create')->middleware('auth');

Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store')->middleware('auth');

Route::get('user/{user}/articles', [ArticleController::class, 'articlesForUser'])->name('articles.for.user');
