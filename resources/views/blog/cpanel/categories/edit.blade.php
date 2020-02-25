@extends('layouts.app')

@section('content')
    @php /** @var \App\Models\BlogArticlesCategory $item */ @endphp
    @include('blog.cpanel.articles.includes.result_messages')
        <div class="container">
            @if($item->exists)
                <form method="POST" action=" {{ route('blog.cpanel.categories.update', $item->id) }}">
            @method('PATCH')
            @else
                <form method="POST" action=" {{ route('blog.cpanel.categories.store') }}">
            @endif
                @csrf
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            @include('blog.cpanel.categories.includes.item_edit_main_col')
                        </div>
                        <div class="col-md-3">
                            @include('blog.cpanel.categories.includes.item_edit_add_col')
                        </div>
                    </div>
                </form>
                        @if($item->exists)
                            <div>
                                <form method="POST" action="{{ route('blog.cpanel.categories.destroy', $item->id) }}">
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
