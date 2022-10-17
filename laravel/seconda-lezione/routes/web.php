<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', [ArticlesController::class, 'showLastestArticles'])->name('home');

Route::get('/tutti-gli-articoli', [ArticleController::class, 'showAllArticles'])->name('all-articles');

// Route::get('/blog', [ArticleController::class, 'showArticles'])->name('blog');
