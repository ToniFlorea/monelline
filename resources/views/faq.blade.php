@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h4 class="mb16">FAQ Title</h4>
                <p class="lead mb64">
                    Hi! If you've got any more questions, feel free to ask us using the button below.
                </p>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <ul class="accordion accordion-2 one-open">
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">In cât timp se produce 1 kg de tortelinii? </h4>
                        </div>
                        <div class="content">
                            <p>
                                Sunt necesare 2 ore de muncă pentru a produce un kg de paste de casă artizanale,
                                umplute.
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">Pot comanda paste cu faina integrală? </h4>
                        </div>
                        <div class="content">
                            <p>
                                Da, pastele noastre sunt făcute atât cu faină normală cât și cu faină integrală –
                                întreabă ospătarul!
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">Cum se face că pastele voastre au un aluat asa de bun? Aluatul
                            </h4>
                        </div>
                        <div class="content">
                            <p>
                                Aluatul nostrum de paste beneficiază de multă atenție, consistența este atent
                                supravegheată deoarece depinde până și de umiditatea din aer, de temperatura mâinilor
                                sau a blatului pe care se lucrează (lemn și nu inox, inoxul este prea rece).
                            </p>
                        </div>
                    </li>
                    <li>
                        <div class="title">
                            <h4 class="inline-block mb0">De ce au ”monellinele” culoarea neagră”?</h4>
                        </div>
                        <div class="content">
                            <p>
                                Pentru ca folosim drept colorant natural negrul de sepie (și nu substitute de cărbune
                                vegetal) pentru a da o nota de “mare” în plus produsului nostru. Somonul proaspăt
                                (necongelat) este gătit la abur (deci mai sanatos decât dacă ar fi prăjit în tigaie).
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<section class="bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h3 class="mb0 inline-block p32 p0-xs">Ai și alte întrebari? </h3>
                <a class="btn btn-lg btn-white mb8 mt-xs-24" href="#">Contactează-ne</a>
            </div>
        </div>

    </div>

</section>
@endsection
