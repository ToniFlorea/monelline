@extends('layouts.app')

@section('content')
<!-- SLIDER -->

<section class="cover fullscreen image-slider slider-arrow-controls kenburns">
    <ul class="slides">
        <li class="image-bg pt-xs-240 pb-xs-240">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/banner-pagina-principala-1.jpg')}}">
            </div>
            <div class="align-bottom">
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="mb24">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
                        <h3 class="uppercase mb0 bold text-primary">Le Monelline</h3>
                        <h5 class="text-white">High Quality Italian Pasta</h5>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">

                    </div>
                    <div class="col-md-5 col-sm-6 col-xs-12 text-right text-center-xs">
                        <a class="btn btn btn-primary mt16" href="#">@lang('welcome.offer')</a>
                    </div>
                </div>

            </div>

        </li>
    </ul>
</section>

<!-- IMAGE GALLERY -->
<section class="projects pt48">
    <div class="container">
        <div class="row masonry-loader">
            <div class="col-sm-12 text-center">
                <div class="spinner"></div>
            </div>
        </div>
        <div class="row masonry masonryFlyIn">
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="{{asset('storage/img/portrait-1.jpg')}}">
                        <div class="title">
                            <h5 class="uppercase mb0">@lang('welcome.food1')</h5>
                            <span>Categorie</span>
                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="{{asset('storage/img/portrait-2.jpg')}}">
                        <div class="title">
                            <h5 class="uppercase mb0">@lang('welcome.food2')</h5>
                            <span>Categorie</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Animals">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="{{asset('storage/img/landscape-1.jpg')}}">
                        <div class="title">
                            <h5 class="uppercase mb0">@lang('welcome.food3')</h5>
                            <span>Categorie</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Objects">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="{{asset('storage/img/portrait-3.jpg')}}">
                        <div class="title">
                            <h5 class="uppercase mb0">@lang('welcome.food4')</h5>
                            <span>Categorie</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="Objects">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="{{asset('storage/img/landscape-2.jpg')}}">
                        <div class="title">
                            <h5 class="uppercase mb0">@lang('welcome.food5')</h5>
                            <span>Categorie</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 masonry-item project" data-filter="People">
                <div class="image-tile inner-title hover-reveal text-center">
                    <a href="#">
                        <img alt="Pic" src="{{asset('storage/img/landscape-3.jpg')}}">
                        <div class="title">
                            <h5 class="uppercase mb0">@lang('welcome.food6')</h5>
                            <span>Categorie</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- MAP SECTION -->
<section class="page-title page-title-3 bg-secondary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="uppercase mb0">@lang('welcome.where to find')</h3>
            </div>
        </div>
    </div>

</section>
<section class="p0">
    <div class="map-holder pt180 pb180">
        <iframe
            src="https://maps.google.com/maps?q=Monelline&amp;t=&amp;z=17&amp;ie=UTF8&amp;iwloc=&amp;output=embed"></iframe>
    </div>
</section>

@endsection
