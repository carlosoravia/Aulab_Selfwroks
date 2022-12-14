<?php

use App\Http\Controllers\articleController;
use App\Http\Controllers\publicController;
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

Route::get('/', [publicController::class, 'home'] )->name('welcome');

Route::get('/scrivi', [publicController::class, 'scrivi'] )->name('scrivi');

Route::post('/article/store', [articleController::class, 'store'])->name('article.index');

Route::get('/all-articles', [articleController::class, 'allArticles'] )->name('article.allArticles');

