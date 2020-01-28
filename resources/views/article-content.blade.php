@extends('layouts.site')
@section('content')
    <section id='layout'>
        @if($article)
        <h4>{{$article->title}}</h4>
        <p>ID в БД: {{$article->id}}</p>
        <div>
            <p class="card-text">{{$article->desc}}</p>
        </div>
        <div>
            {!!$article->text!!}
        </div>
            @endif
    </section>
@endsection
