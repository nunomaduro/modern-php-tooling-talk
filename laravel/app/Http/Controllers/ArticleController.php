<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\View\View;

class ArticleController
{
    /**
     * Returns a view with all articles.
     */
    public function index(): int
    {
        dd();

        return view('articles.list', [
            'articles' => Article::all(),
        ]);
    }

    public function publish(Article $article): View
    {
        $article->publish();

        return view('articles.show', [
            'article' => $article,
        ]);
    }

    public function unpublish(Article $article): View
    {
        $article->unpublish();

        return view('articles.show', [
            'article' => $article,
        ]);
    }
}
