<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <title>Создать статью</title>
    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="/public/css/summernote.min.css" rel="stylesheet">
    <script src="/public/js/summernote.min.js"></script>
</head>
<body>

@extends('layouts.app')

@section('content')
    @php /** @var \App\Models\BlogArticle $item */ @endphp

    <div class="container">
        @include('blog.cpanel.articles.includes.result_messages')
        @if($item->exists)
            <form method="POST" action=" {{ route('blog.cpanel.articles.update', $item->id) }}">
        @method('PATCH')
        @else
            <form method="POST" action=" {{ route('blog.cpanel.articles.store') }}">
        @endif
            @csrf
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @include('blog.cpanel.articles.includes.article_edit_main_col')
                    </div>
                    <div class="col-md-3">
                        @include('blog.cpanel.articles.includes.article_edit_add_col')
                    </div>
                </div>
        </form>
            @if($item->exists)
                        <div>
                            <form method="POST" action="{{ route('blog.cpanel.articles.destroy', $item->id) }}">
                                @method('DELETE')
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="card card-block">
                                            <div class="card-body ml-auto">
                                                <button type="submit" class="btn btn-link">Удалить</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3"></div>
                                </div>
                            </form>
                        </div>
            @endif
    </div>
@endsection
</body>>
