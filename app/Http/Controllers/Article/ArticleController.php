<?php

namespace App\Http\Controllers\Article;

use App\Http\Controllers\Controller;
use App\Http\Resource\ArticleResource;
use App\Service\ArticleService;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function __construct(private readonly ArticleService $articleService)
    {
    }

    /**
     * Показать все статьи
     */
    public function index()
    {
        $articles = ArticleResource::collection($this->articleService->all());

        return view('articles.index', compact('articles'));
    }

    /**
     * Показать статью
     */
    public function show(string $article)
    {
        $article = $this->articleService->getArticle(articleId: $article);

        abort_if(null === $article, 404);

        $article = ArticleResource::make($article);

        return view('articles.show', compact('article'));
    }

    /**
     * Форма
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Создание записи
     */
    public function store(Request $request)
    {
        $this->articleService->createArticle($request);

        return redirect('/')->with('success', 'Запись добавлена');
    }
}
