@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="uppercase mb80">Administrare meniu</h4>
                <button type="submit">Adaugă un produs nou</button></form>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 text-center">
                            <h4 class="uppercase ">Categorii de produse</h4>
                            <div class="tabbed-content button-tabs">
                                <ul class="tabs">
                                    <li class="active">
                                        <div class="tab-title">
                                            <span>Paste</span>
                                        </div>
                                        <div class="tab-content">
                                            <div class="row">
                                                @if(count($products)>0)
                                                @foreach ($products as $product)

                                                <div class="col-md-6 mt-4">
                                                    <div class="card">
                                                        <img src="{{asset('storage/img/produse/Monellinenere29ron.jpg')}}"
                                                            class="img-fluid" alt="">
                                                        <div class="card-content">
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h6 class="text-center">ROMÂNĂ</h6>
                                                                    <h4 class="mt-4 text-center">
                                                                        <b>{{$product->name_ro}}</b></h4>
                                                                    <p>{{$product->desc_ro}}</p>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h6 class="text-center">ENGLISH</h6>
                                                                    <h4 class="mt-4 text-center">
                                                                        <b>{{$product->name_en}}</b></h4>
                                                                    <p>{{$product->desc_en}}</p>
                                                                </div>
                                                            </div>
                                                            <h5 class="text-center">Pret: <b>{{$product->price}} lei</b>
                                                            </h5>
                                                            <hr>
                                                            <div class="button-wrapper">
                                                                <button class="btn btn-warning">Editeaza</button>
                                                                <button class="btn btn-danger">Sterge</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                                @endif

                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-title">
                                            <span>Desert</span>
                                        </div>
                                        <div class="tab-content">
                                            <p>
                                                Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                                                consectetur, adipisci velit, sed quia non numquam eius modi tempora
                                                incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim
                                                ad minima veniam, quis nostrum exercitationem ullam corporis suscipit
                                                laboriosam, nisi ut aliquid ex ea commodi consequatur?
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-title">
                                            <span>Răcoritoare</span>
                                        </div>
                                        <div class="tab-content">
                                            <p>
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                                blanditiis praesentium voluptatum deleniti atque corrupti quos dolores
                                                et quas molestias excepturi sint occaecati cupiditate non provident,
                                                similique sunt in culpa qui officia deserunt mollitia animi, id est
                                                laborum et dolorum fuga. Et harum quidem rerum facilis est.
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="tab-title">
                                            <span>Extra</span>
                                        </div>
                                        <div class="tab-content">
                                            <p>
                                                Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
                                                impedit quo minus id quod maxime placeat facere possimus, omnis voluptas
                                                assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et
                                                aut officiis debitis aut rerum necessitatibus saepe eveniet ut et
                                                voluptates repudiandae sint et molestiae non recusandae.
                                            </p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--end of button tabs-->
                        </div>
                    </div>
                    <!--end of row-->
                </div>

                {{-- <div class="tabbed-content button-tabs vertical">
                    <ul class="tabs">
                        <li class="active">
                            <div class="tab-title">
                                <span>Statistici</span>
                            </div>
                            <div class="tab-content">
                                <h5 class="uppercase">Statisticile Le Monelline</h5>
                                <hr>
                                <p>
                                    Google Analytics este un serviciu de analiză web oferit de Google care urmărește și
                                    raportează traficul site-urilor web, în ​​prezent ca platformă în cadrul mărcii
                                    Google Marketing Platform.
                                </p>
                                <p>
                                    Vizualizeaza in timp real statistici despre pagina Le Monelline. Utilizatori online,
                                    pagini vizitate, valoarea paginii, locatiile din care pagina este accesata si multe
                                    altele.
                                </p>
                                <form action="https://analytics.google.com/analytics/web/#/">
                                    <button type="submit">Vizualizeaza</button></form>
                            </div>
                        </li>
                        <li>
                            <div class="tab-title">
                                <span>Meniu</span>
                            </div>
                            <div class="tab-content">
                                <h5 class="uppercase">Meniu</h5>
                                <hr>
                                <p>
                                    Administreaza produsele afisate pe meniu. De aici poti adauga produse noi, le poti
                                    edita si sterge pe cele deja existente.
                                </p>
                                <form action="{{url('/products')}}">
                <button type="submit">Editeaza meniul</button></form>
            </div>
            </li>
            <li>
                <div class="tab-title">
                    <span>Conturi</span>
                </div>
                <div class="tab-content">
                    <h5 class="uppercase">Administrare conturi</h5>
                    <hr>
                    <p>
                        De aici poti administra conturile existente. <b>Numai persoanele de incredere si cu roluri
                            administrative ar trebui sa aiba un cont.</b>
                        Orice persoana ce dispune de un cont activ poate modifica meniul, poate vizualiza mesajele si
                        poate administra conturile.
                    </p>
                    <form action="https://analytics.google.com/analytics/web/#/">
                        <button type="submit">Administreaza conturile</button></form>
                </div>
            </li>


            </ul>
        </div> --}}
        <!--end of button tabs-->
    </div>
    </div>
    <!--end of row-->
    </div>
    <!--end of container-->

</section>
@endsection