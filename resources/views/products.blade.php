@extends('template')

@section('content')
    <div class="products_container">
        <div class="product">
            <img src="/images/products/pizza/pizza_4cheese.jpg" alt="">
        </div>
        <div class="uk-container uk-container-expand">
            <div class="uk-margin-top uk-margin-bottom">
                <div class="uk-grid">
                    <div class="uk-width-1-4">
                        <span class="uk-text-bold uk-text-uppercase">4 сезона</span> краткое описание
                    </div>
                    <div>
                        Какое то описание пиццы
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products_container">
        <div class="product">
            <div class="uk-position-relative uk-visible-toggle uk-light" data-index="1"
                uk-slidershow="min-height:100px; max-height:250px;">

                <ul class="uk-slideshow-items">
                    <li>
                        <img src="/images/products/pizza/pizza_4cheese.jpg" alt="">
                    </li>
                    <li>
                        <img src="/images/products/pizza/pizza_4season.jpg" alt="">
                    </li>
                    <li>
                        <img src="/images/products/pizza/pizza_alzone_closed.jpg" alt="">
                    </li>
                    <li>
                        <img src="/images/products/pizza/pizza_greek.jpg" alt="">
                    </li>
                    <li>
                        <img src="/images/products/pizza/pizza_hawaiian.jpg" alt="">
                    </li>

                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#"
                       uk-slidershow-item="previous">
                        <
                    </a>
                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#"
                       uk-slidershow-item="next">
                        >
                    </a>
                <div class="uk-container uk-container-expand">
                    <div class="uk-margin-top uk-margin-bottom">
                        <div class="uk-grid">
                            <div class="uk-width-1-4">
                                <span class="uk-text-bold uk-text-uppercase">4 сезона</span> краткое описание
                            </div>
                            <div>
                                Какое то описание пиццы
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('includes.products_category_bar')
@endsection
