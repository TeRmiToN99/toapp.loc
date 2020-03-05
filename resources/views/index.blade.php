@extends('template')

@section('content')
    <div
        class="uk-background-cover uk-position-relative"
        style="background-image: url('public/images/products/pizza/pizza_vegetarian.jpg');"
        uk-height-viewport="offset-top: true"
    >
        <a class="uk-position-bottom-center" href="#title" uk-scroll="offset:100">
            <img>
        </a>
    </div>
    <div class="uk-container-expand uk-padding uk-text-center index_title" id="title">
        <p>Какой то текст..</p>
    </div>

    @include('includes.products_category_bar')
@endsection
