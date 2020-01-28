@extends('layouts.site') <!--подключение родительского шаблона-->
@section('content')  <!--выделяем секцию дочернего шаблона для вставки в родительский шаблон-->
<section id="intro" class="intro-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1>{{$title}} <span class="badge indigo">(5)</span></h1>
                <p class="text-muted">{{$message}}</p>
            </div>
        </div>
    </div>
</section>


<section id="content">
    <div class="row">
        <div class="col-md-12">
            <!-- Card group -->
            <div class="card-deck">
                @foreach($articles as $article)
                    <div class="card mb-4">
                        <h4 class="card-title">{{$article->title}}</h4>
                        <p>ID в БД: {{$article->id}}</p>
                        <div class="card-body">
                            <!-- Modal -->
                           <p class="card-text">{{$article->desc}}</p>
                        </div>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$article->id}}">
                            Показать
                        </button>
                        <!--кнопка удаления статьи-->
                        <form action="{{route('articleDelete', ['article' => $article->id]) }}" method="post">
                            <!--<input type="hidden" name="_method" value="DELETE">-->
                            {{method_field('DELETE')}}
                            {{csrf_field()}}
                            <button type="submit" class="btn btn-danger">Удалить</button>
                        </form>
                    </div>
                                        <!-- Modal -->
                    <div class="modal fade" id="exampleModal{{$article->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                         aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$article->title}}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    {!!$article->text!!}
                                </div>
                                <a href="{{ route('articleShow', ['id'=>$article->id]) }}">Подробнее</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection <!--закрывающая директива выделяемой секции-->
