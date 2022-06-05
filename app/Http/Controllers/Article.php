<?php

namespace App\Http\Controllers;

use App\Models\Article as ModelsArticle;

class Article extends Controller
{
    public function index()
    {
        $articles = ModelsArticle::all()['articles'];
        return view('articles', [
            "articles" => $articles
        ]);
    }
}
