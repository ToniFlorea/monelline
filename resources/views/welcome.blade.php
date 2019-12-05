@extends('layouts.app')

@section('content')
<!-- SLIDER -->
<section class="cover fullscreen image-slider slider-arrow-controls controls-inside parallax">
    <ul class="slides">
        <li class="overlay image-bg">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/banner-pagina-principala-1.jpg')}}">
            </div>
            <div class="container v-align-transform">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 text-center">
                        <img alt="Logo" class="mb8" src="{{asset('storage/img/Logo_LM.svg')}}">
                        <h6 class="uppercase mb32">High Quality Italian Pasta</h6>
                        <!-- <p class="text-justify mb0">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                        </p> -->
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>

<!-- SPECIAL OFFER -->
<div class="bg-primary weekly-offer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="mb0 mt-20 inline-block p32 p0-xs">Oferta saptamanii la Le Monelline!&nbsp;</h3>
                <a class="btn btn-lg btn-white mt-xs-24 mt-2" href="https://www.facebook.com/lemonelline.official/">Vezi
                    oferta</a>
            </div>
        </div>

    </div>
</div>

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
                            <h5 class="uppercase mb0">Preparat 1</h5>
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
                            <h5 class="uppercase mb0">Preparat 1</h5>
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
                            <h5 class="uppercase mb0">Preparat 1</h5>
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
                            <h5 class="uppercase mb0">Preparat 1</h5>
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
                            <h5 class="uppercase mb0">Preparat 1</h5>
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
                            <h5 class="uppercase mb0">Preparat 1</h5>
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
                <h3 class="uppercase mb0">Unde ne găsești?</h3>
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
