<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class articleController extends Controller
{
    public function store(Request $request){
        Articles::create([
            'title'=> $request->input('title'),
            'subtitle'=> $request->input('subtitle'),
            'category'=> $request->input('category'),
            'body'=> $request->input('body'),
        ]);
    }
    public function create(){
        return redirect(route('home'))->with('message', 'articolo creato');
    }

    public function allArticles(){
        $articles = Articles::all();
        return view('article.allArticles', compact('articles'));
    }
}

