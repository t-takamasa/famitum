<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Inertia\Inertia;
// use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        $articles = Article::all();
        return Inertia::render('Top', ['articles' => $articles]);
    }
}
