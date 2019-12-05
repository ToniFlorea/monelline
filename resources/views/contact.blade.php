@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <h4 class="uppercase">Contacteaza-ne</h4>
                <p>
                    Doresti sa iei legatura cu noi? Iti punem la dispozitie mai multe modilitati de a ne contacta.
                    Foloseste numarul de telefon
                    de mai jos, formularul de contact sau adresa de email Le Monelline.
                </p>
                <hr>
                <p>
                    Str. Augustin Pacha, nr 5
                    <br> Timisoara. Romania
                    <br> Cod Postal 300430
                </p>
                <hr>
                <p>
                    <strong>E:</strong> contact@lemonelline.com
                    <br>
                    <strong>P:</strong> +0356 - xxx - xxx
                    <br>
                </p>
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <form class="form-email" data-success="Multumim pentru mesaj! Te vom contacta cat de curand."
                    data-error="Te rugam sa completezi corect toate campurile.">
                    <input type="text" class="validate-required" name="name" placeholder="Numele tau">
                    <input type="text" class="validate-required validate-email" name="email"
                        placeholder="Adresa de email pentru contact">
                    <textarea class="validate-required" name="message" rows="4" placeholder="Mesajul tau"></textarea>
                    <button type="submit">Trimite mesajul</button>
                </form>
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