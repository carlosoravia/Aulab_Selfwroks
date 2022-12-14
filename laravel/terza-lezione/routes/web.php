<?php

use App\Http\Controllers\ArticlesController;
use Illuminate\Routing\RouteRegistrar;
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


Route::get('/home', [ArticlesController::class, 'showLastestArticles'])->name('home');


Route::get('/blog', [ArticlesController::class, 'showAllArticles'])->name('blog');


Route::get('/article/{id}', [ArticlesController::class, 'showByIndex'])->name('article.show');
