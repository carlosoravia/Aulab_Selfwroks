<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PublicController;
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

// home page
Route::get('/', [PublicController::class, 'home'])->name('home');

// pagina di dettaglio articolo
Route::get('/article/{article}/show', [ArticleController::class, 'show'])->name('article.show');

// middleware (protegge-rotte)
Route::middleware(['auth'])->group(function () {

    // form creazione articoli
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article');
    // salva i dati del form articoli
    Route::post('/article/store', [ArticleController::class, 'store'])->name('article.store');

    // pagina tutti gli articoli
    Route::get('/article/index', [ArticleController::class, 'index'])->name('article.index');

    // rotta form edit aricoli
    Route::get('/article/{article}/edit', [ArticleController::class, 'edit'])->name('article.edit');

    //rotta che prende dati del form di edit-articoli
    Route::put('article/{article}/update', [ArticleController::class, 'update'])->name('article.update');

    // ROTTA PER ELIMINARE L'ARTICOLO
    Route::delete('/article/{article}/delete', [ArticleController::class, 'destroy'])->name('article.delete');
});
