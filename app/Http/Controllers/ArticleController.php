<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        return view('articles', ['articles' => Article::all()]);
    }

    public function show(Article $article)
    {
        if (!$article) {
            abort(404);
        }

        return view('articles.show', ['article' => $article]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        Article::create($this->validateArticle());

        return redirect('/articles');
    }

    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());

        return redirect('/articles/' . $article->id);
    }

    public function destroy(Article $article)
    {

        $article->delete();
        return redirect('/articles');
    }

    /**
     * @return array
     */
    public function validateArticle(): array
    {
        return request()->validate([
            'titel' => 'required',
            'beschrijving' => 'required',
            'tekst' => 'required'
        ]);
    }
}
