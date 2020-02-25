@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <nav class="navbar navbar-toggleable-md navbar-light bg-faded">
                    <a class="btn btn-primary" href="{{ route('blog.cpanel.articles.create') }}">Написать</a>
                </nav>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Автор</th>
                                <th>Категория</th>
                                <th>Заголовок</th>
                                <th>Дата публикации</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginator as $article)
                                @php
                                    /** @var \App\Models\BlogArticle $article */
                                @endphp
                                <tr @if(!$article->is_published) style="background-color: #ccc;" @endif>
                                    <td>{{ $article->id }}</td>
                                    <td>{{ $article->user->name }}</td>
                                    <td>{{ $article->category->title }}</td>
                                    <td>
                                        <a href="{{ route('blog.cpanel.articles.edit', $article->id) }}">{{ $article->title }}</a>
                                    </td>
                                    <td>{{ $article->published_at ? \Carbon\Carbon::parse($article->published_at)->format('d.M H:i') : '' }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfood></tfood>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @if($paginator->total() > $paginator->count())
            <br>
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            {{ $paginator->links() }}
                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
