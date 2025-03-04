<?php

namespace App\Http\Controllers;

// use Illuminate\View\View;

class ArticleController
{
    /**
     * Returns a view with all articles.
     */
    public function index(): int
    {
        dd();

        return view('articles', [
            'articles' => Article::all(),
        ]);
    }

    public function publish(): void
    {
        // your public logic...
    }

    public function unpublish(): void
    {
        // your unpublish logic...
    }
}
