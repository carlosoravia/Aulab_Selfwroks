<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class publicController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function articles() {
        return view('article.index');
    }

    public function scrivi() {
        return view('scrivi');
    }

}
