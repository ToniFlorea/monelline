@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="uppercase mb80">Administrare</h4>
                <div class="tabbed-content button-tabs vertical">
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
                                    De aici poti administra conturile existente. <b>Numai persoanele de incredere si cu roluri administrative ar trebui sa aiba un cont.</b>
                                    Orice persoana ce dispune de un cont activ poate modifica meniul, poate vizualiza mesajele si poate administra conturile.
                                </p>
                                <form action="https://analytics.google.com/analytics/web/#/">
                                    <button type="submit">Administreaza conturile</button></form>
                            </div>
                        </li>
         

                    </ul>
                </div>
                <!--end of button tabs-->
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>
@endsection