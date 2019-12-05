@extends('layouts.app')

@section('content')
<section class="cover fullscreen image-slider slider-all-controls controls-inside parallax">
    <ul class="slides">
        <li class="overlay image-bg">
            <div class="background-image-holder">
                <img alt="image" class="background-image" src="{{asset('storage/img/about-us-cover.jpg')}}">
            </div>
            <div class="container v-align-transform">
                <div class="row">
                    <div class="col-md-6 col-sm-8">
                        <h1 class="mb40 mb-xs-16 large">Despre noi
                        </h1>
                        <h6 class="uppercase mb16">Echipa Le Monelline</h6>
                        <p class="lead mb40">
                            Afla mai multe despre echipa noastra si ce reprezinta
                            <br>pentru noi Le Monelline.
                        </p>
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
                        <span>Creative Director</span>
                    </div>
                    <p class="mb0">
                        ”Mă numesc Mauro Monelli și sunt pasionat de mâncarea gourmet! Rețetele noastre de paste făcute
                        în casă provin din tradția emiliană a familiei mele și sunt vechi de sute de ani. Tortellini cu
                        dovleac, cu ricotta sau ragu, tagliatelle sau gnocchi – toate sunt reproduse artizanal, în
                        bucataria “Le Monelline”, exact așa cum le pregăteau și bunicile mele. Eu am învățat să fac
                        aluatul de paste de la bunica mea, Triestina și de la mama mea Ilde, care a învățat-o și pe
                        sotia mea, Tunde. Pastele făcute în casă, din ingrediente de calitate sunt bune, sănătoase,
                        pline de dragoste și de energia necesară pentru a le produce”.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="image-tile outer-title text-center">
                    <img alt="Pic" src="{{asset('storage/img/Tunde.jpg')}}">
                    <div class="title mb16">
                        <h5 class="uppercase mb0">Tunde</h5>
                        <span>iOS Developer</span>
                    </div>
                    <p class="mb0">
                        ”Mă numesc Tunde și vă invităm să încercați pastele noastre gourmet făcute în casă, ce îmbină
                        tradiția cu inovația și tin pasul cu viața frenetică și ritmul alert al orașului nostru. Cu
                        dragoste și curiozitate am reinterpretat, în notă modernă, retetele tradiționale italiene
                        căutand noi arome, texturi și gusturi contemporane. Paste tradiționale cu sosuri tipic emiliane
                        - ca ragù, unt si salvie, crema de parmesan – sau combinații inedite precum surpinzătoarele
                        monellinele negre cu sepie și somon în sos de citrice, toate sunt realizate din ingrediente de
                        cea mai bună calitate, cu exigentă maximă în modul de preparare și de livrare”.
                    </p>
                </div>
            </div>
            <div class="col-md-4 col-sm-6">
                <div class="image-tile outer-title text-center">
                    <img alt="Pic" src="{{asset('storage/img/Radu.jpg')}}">
                    <div class="title mb16">
                        <h5 class="uppercase mb0">Radu</h5>
                        <span>Brand Director</span>
                    </div>
                    <p class="mb0">
                        ”Toate produsele noastre sunt de o calitate excelentă, artizanale, din ingrediente naturale, de
                        cea mai bună calitate. Nu folosim coloranți alimentari, conservanți sau amelioratori în niciunul
                        dintre produsele noastre, de aceea sunt super gustoase și sănătoase. Când spunem “paste produse
                        în casă” înseamnă pentru noi că pastele, începand cu aluatul, se fac în fața clientului.
                        Bucataria noastră este la vedere, gătim și pregătim totul la vedere, în totală transparență,
                        deoarecem vrem ca toți clienții noștri să vadă grija și atenția noastră pentru produse și
                        promisiunea noastră respectată, de a face produse gourmet, homemade, de cea mai bună calitate”.
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
                    <h6 class="uppercase mb16 mb-xs-8">About Us</h6>
                    <h3>Our story and why Le Monelline
                        <br>represents high quality</h3>
                </div>
            </div>
            <div class="row mb32 mb-xs-16">
                <div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
                    <img alt="Article Image" class="mb32 mb-xs-16" src="{{asset('storage/img/blog-single.jpg')}}">
                    <p class="lead">
                        Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                        voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a
                        sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis
                        doloribus asperiores repellat.
                    </p>
                    <p class="lead">
                        Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                        sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                        voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                        laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui
                        in ea voluptate velit esse quam nihil molestiae consequatur
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
