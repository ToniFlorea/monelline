@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <h4 class="uppercase">@lang('contact.Contact us')</h4>
                <p>
                    @lang('contact.Contact Desc')
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
                    <strong>P:</strong> +40 784 270 210
                    <br>
                </p>
            </div>
            <div class="col-sm-6 col-md-5 col-md-offset-1">
                <form class="form-email" data-success="Multumim pentru mesaj! Te vom contacta cat de curand."
                    data-error="Te rugam sa completezi corect toate campurile.">
                    <input type="text" class="validate-required" name="name" placeholder="@lang('contact.Name')">
                    <input type="text" class="validate-required validate-email" name="email"
                        placeholder="@lang('contact.Mail')">
                    <textarea class="validate-required" name="message" rows="4" placeholder="@lang('contact.Message')"></textarea>
                    <button type="submit">@lang('contact.Send')</button>
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