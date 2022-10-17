<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()

    // rendere categorie e tag visibili a tutte le viste
    {
        $articles = Article::all();
        View::share('articles', $articles);

        if (Schema::hasTable('categories') && Schema::hasTable('tags')) {

            $categories = Category::all();
            View::share('categories', $categories);

            $tags = Tag::all();
            View::share('tags', $tags);
        }
    }
}
