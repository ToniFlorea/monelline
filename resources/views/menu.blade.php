@extends('layouts.app-b4')

@section('content')

<section class="cover fullscreen image-slider slider-arrow-controls kenburns">
    <ul class="slides">
        <li class="image-bg pt-xs-240 pb-xs-240">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/banner-meniu.jpg')}}">
            </div>
            <div class="align-bottom">
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="mb24">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
                        <h3 class="uppercase mb0 bold text-monelline">@lang('menu.Menu')</h3>
                        <h5 class="text-white">@lang('menu.Our products')</h5>
                    </div>
                    <div class="col-md-4 hidden-sm hidden-xs">

                    </div>
                </div>

            </div>

        </li>
    </ul>
</section>
<!-- Banner Area End -->

<!-- Food Area starts -->
<section class="food-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="section-top">
                    <h3><span class="style-change">@lang('menu.Menu Title 1')</span> <br> @lang('menu.Menu Title 2') </h3>
                    <p class="pt-3" > @lang('menu.Menu Intro')
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img src="{{asset('storage/img/produse/Monellinenere29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content" style="background: black">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title" style="color: white !important">@lang('menu.Monelline Nere')</h4>
                            <span class="style-change">39.00 lei </span>
                        </div>
                        <hr>
                        <span class="pt-3"  style="color: white !important; font-size: 17px;">@lang('menu.Nere Desc')
                        </span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img  class="push_img_up" src="{{asset('storage/img/produse/Tortellinidecarnecuragu39ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Traditionali De Carne')</h4>
                            <span class="style-change">39.00 lei </span>
                        </div>
                        <hr>
                        <p class="pt-3" style="font-size: 17px;" >@lang('menu.Desc Carne 1')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/Tortellinidecarnecuragu39ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Traditionali De Carne')</h4>
                            <span class="style-change">39.00 lei </span>
                        </div>
                        <hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Carne 2')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/Tortellinidecarnecuragu39ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Traditionali De Carne')</h4>
                            <span class="style-change">39.00 lei </span>
                        </div>
                        <hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Carne 3')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/Tortellinicudovleacsisosragu29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Cu Dovleac Dulce')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div>
                        <hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Dovleac 1')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/Tortellinicudovleacsisosragu29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Cu Dovleac Dulce')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div>
                        <hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Dovleac 2')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/Tortellinicudovleacsisosragu29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Cu Dovleac Dulce')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div>
                        <hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Dovleac 3')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/TortellinicuricotasispanaccondimentatiinstilVecchiaModena29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Cu Ricotta Și Spanac')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Spanac 1')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/TortellinicuricotasispanaccondimentatiinstilVecchiaModena29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Cu Ricotta Și Spanac')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Spanac 2')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/TortellinicuricotasispanaccondimentatiinstilVecchiaModena29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tortelinii Cu Ricotta Și Spanac')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Spanac 3')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img style="margin: -130px 0 0 0px;" src="{{asset('storage/img/produse/Tagliatellecuragu29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tagliatelle Emiliane')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Emiliane 1')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img style="margin: -130px 0 0 0px;" src="{{asset('storage/img/produse/Tagliatellecurosiisibusuioc29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tagliatelle Emiliane')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Emiliane 2')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img class="push_img_up" src="{{asset('storage/img/produse/Tortellinicudovleacsisosragu29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Tagliatelle Emiliane')</h4>
                            <span class="style-change">39.00 lei</span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Emiliane 3')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img src="{{asset('storage/img/produse/Gnocchicugorgonzolasinuci29ron-Copy.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Gnocchi De Cartofi')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Gnocchi 1')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img style="margin: -146px 0 0 0px;" src="{{asset('storage/img/produse/Gnocchicurosiisibusuioc29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Gnocchi De Cartofi')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Gnocchi 2')
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 mt-2">
                <div class="single-food limit-food-height">
                    <div class="food-img">
                        <img  src="{{asset('storage/img/produse/Gnocchicuragu29ron.jpg')}}" class="img-fluid" alt="">
                    </div>
                    <div class="food-content">
                        <div class="d-flex justify-content-between">
                            <h4 class="menu-title">@lang('menu.Gnocchi De Cartofi')</h4>
                            <span class="style-change">29.00 lei </span>
                        </div><hr>
                        <p class="pt-3" style="font-size: 17px;">@lang('menu.Desc Gnocchi 3')
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Food Area End -->
@endsection