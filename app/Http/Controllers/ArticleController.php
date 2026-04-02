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
    }

    public function create()
    {
        //
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

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
