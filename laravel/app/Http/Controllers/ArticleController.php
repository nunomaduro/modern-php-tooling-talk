<?php

namespace App\Http\Controllers;

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
}
