@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h1>Список статей</h1>
            <a href="{{ route('article.new') }}" class="btn btn-primary">Добавить статью</a>
        </div>

        @foreach ($articles as $article)
            <a href="{{ route('article.show', ['articleId' => $article->id]) }}" class="text-decoration-none">
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">{{ $article->title }}</h5>
                        <p class="card-text text-dark">Автор: {{ $article->author }}</p>
                        <p class="card-text text-dark">{{ $article->brief }}</p>
                    </div>
                </div>
            </a>
        @endforeach

        <div class="d-flex justify-content-center">
            {{ $articles->links() }}
        </div>
    </div>
@endsection
