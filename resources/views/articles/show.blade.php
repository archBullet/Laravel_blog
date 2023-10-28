@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-body">
                <h1>{{ $article->title }}</h1>
                <p class="text-muted">Автор: {{ $article->author }}</p>
                <p>{{ $article->content }}</p>
                <a href="{{ route('articles.index') }}" class="btn btn-secondary">Назад к списку статей</a>
            </div>
        </div>
    </div>
@endsection
