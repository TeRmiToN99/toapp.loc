@extends('layouts.site')


@section('content')
    <div class="container">
        <div class="row">
            <div class="form">
                <h1>Добавить статью</h1>
                <form action="{{route('articleStore')}}" method="post">
                    <div class="form-group">
                        <label for="title">Заголовок</label><br>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="user">Автор:</label><br>
                    </div>
                    <div class="form-group">
                        <label for="desc">Краткое описание</label><br>
                        <div class="col-5">
                            <textarea class="form-control" name="desc" id="desc" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="text">Полный текст</label><br>
                        <div class="col-5">
                            <textarea class="form-control" name="text" id="text" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Отправить</button>
                        {{ csrf_field() }}
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
