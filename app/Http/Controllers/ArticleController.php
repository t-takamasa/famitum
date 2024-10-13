<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Inertia\Inertia;
// use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return Inertia::render('Articles/Index', ['articles' => $articles]);
    }

    public function show($article_id)
    {
        $article = Article::findOrFail($article_id);
        return Inertia::render('Articles/Show', ['article' => $article]);
    }
}
