<?php

namespace App\Service;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ArticleService
{
    public function all()
    {
        return Article::latest()->paginate(5);
    }

    public function getArticle(string $articleId): Article|Model|null
    {
        return Article::query()
            ->where('id', $articleId)
            ->first();
    }

    public function createArticle(Request $request)
    {
        $request->validate([
            'title' => 'required|max:255',
            'author' => 'nullable|max:100',
            'brief' => 'required|max:500',
            'content' => 'required',
        ]);

        Article::create($request->all());
        
        return true;
    }
}
