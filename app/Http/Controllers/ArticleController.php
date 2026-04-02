<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Http\Requests\ArticleRequest;
use Illuminate\Http\Request;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{
    public function index()
    {
        return ArticleResource::collection(Article::all());
    }

    public function store(ArticleRequest $request)
    {
        return response()->json(
            Article::create($request->validated()), 201
        );
    }

    public function show(string $id)
    {
        return new ArticleResource(Article::findOrFail($id));
    }

    public function update(ArticleRequest $request, string $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->validated());

        return new ArticleResource($article);
    }

    public function destroy(string $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
    }
}
