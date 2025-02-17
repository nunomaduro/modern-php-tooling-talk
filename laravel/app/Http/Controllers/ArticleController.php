<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class ArticleController extends Controller
{
    /**
     * Returns a view with all articles.
     */
    public function index(): View
    {
        dd();

        return view('articles', [
            'articles' => Article::all(),
        ]);
    }
}
