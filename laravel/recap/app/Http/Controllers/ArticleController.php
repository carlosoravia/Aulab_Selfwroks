<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // ritorna pagina con tutti gli articoli

        return view('article.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creiamo l'articolo
        $article = Auth::user()->articles()->create(
            [
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'body' => $request->input('body'),
                'category_id' => $request->input('category_id'),
                'img' => $request->hasFile('img') ? $request->file('img')->store('public/articles') : 'img/default.png',
            ]
        );

        //array dei tag
        $tags = $request->input('tags');

        foreach ($tags as $tag) {
            $article->tags()->attach($tag);
        }

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editsing the specified resource.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $article)
    {
        return view('article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $article)
    {
        $article->update(
            [
                'title' => $request->input('title'),
                'subtitle' => $request->input('subtitle'),
                'body' => $request->input('body'),
                'category_id' => $request->input('category_id'),
                'img' => $request->hasFile('img') ? $request->file('img')->store('public/articles') : $article->img,
            ]
        );

        $tags = $request->input('tags');
        //sync prende un array di numeri e controlla se sono già presenti, se non lo sono agginge il numero
        $article->tags()->sync($tags);

        return redirect(route('article.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return redirect(route('article.index'));
    }
}
