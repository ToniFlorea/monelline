@extends('layouts.app')

@section('content')

<section class="cover fullscreen image-slider slider-arrow-controls kenburns">
    <ul class="slides">
        <li class="image-bg pt-xs-240 pb-xs-240">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/about-us-cover.jpg')}}">
            </div>
            <div class="align-bottom">
                <div class="row">
                    <div class="col-sm-12">
                        <hr class="mb24">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center-xs mb-xs-24">
                        <h3 class="uppercase mb0 bold text-primary">@lang('about.about us')</h3>
                        <h5 class="text-white">@lang('about.find more')</h5>
                    </div>

                </div>

            </div>

        </li>
    </ul>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-6">
                <div class="image-tile outer-title text-center">
                    <img alt="Pic" src="{{asset('storage/img/Mauro.jpg')}}">
                    <div class="title mb16">
                        <h5 class="uppercase mb0">Mauro</h5>
                    </div>
                    <p class="mb0">
                        @lang('about.mauro')
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="image-tile outer-title text-center">
                    <img alt="Pic" src="{{asset('storage/img/Tunde.jpg')}}">
                    <div class="title mb16">
                        <h5 class="uppercase mb0">Tunde</h5>
                    </div>
                    <p class="mb0">
                        @lang('about.tunde')
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="image-tile outer-title text-center">
                    <img alt="Pic" src="{{asset('storage/img/Radu.jpg')}}">
                    <div class="title mb16">
                        <h5 class="uppercase mb0">Radu</h5>
                    </div>
                    <p class="mb0">
                        @lang('about.radu')
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="feed-item mb96 mb-xs-48">
            <div class="row mb16 mb-xs-0">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 text-center">
                    <h6 class="uppercase mb16 mb-xs-8">@lang('about.about us')</h6>
                    <h3>@lang('about.our story')</h3>
                </div>
            </div>
            <div class="row mb32 mb-xs-16">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <img alt="Article Image" class="mb32 mb-xs-16" src="{{asset('storage/img/LEMO.png')}}">
                    <p class="lead">
                        Gama ”Le Monelline” este vedeta bucătăriei noastre fiind realizată exclusiv din ingrediente
                        gourmet, de o calitate excelentă. ”Le Monelline” este o marcă proprie înregistrată și cuprinde
                        produse 100% originale, ce au la bază rețete inovatoare, dezvoltate în bucătăria ”Le Monelline”.
                    </p>
                    <p class="lead">
                        ”Le Monelline” provine de la numele lui Mauro Monelli, unul dintre fondatori. In italiană, ”Le
                        Monelline” înseamnă ”ștrengărițe” și ne duce cu gândul la stregnărițele pe care le veți întalni
                        adresea în restaurantul nostru, fetițele asociaților, Sophie și Anastasia, mereu vesele și puse
                        pe șotii.
                    </p>

                    <p class="lead">
                        Toate produsele din gama ”Le Monelline” - MONELLINE NERE cu sos de citrice italiene , MONELLINE
                        ROSSE cu sos de unt topit și salvie, MONELLINE ROSSE VEGANE cu sos de țelină, mere și nuci au un
                        spirit tânăr, îndrăzneț și suprinzător.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection