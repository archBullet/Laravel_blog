@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1>Новая статья</h1>
        <form action="/article" method="post" class="mt-4">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label"></label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Заголовок"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="author" class="form-label"></label>
                <input type="text" name="author" class="form-control" id="author" placeholder="Автор"
                    value="{{ old('author') }}">
                @error('author')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="brief" class="form-label"></label>
                <textarea name="brief" class="form-control" id="brief" placeholder="Бриф">{{ old('brief') }}</textarea>
                @error('brief')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="content" class="form-label"></label>
                <textarea name="content" class="form-control" id="content" placeholder="Текст">{{ old('content') }}</textarea>
                @error('content')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
