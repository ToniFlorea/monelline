<footer class="footer-2 bg-dark pt96 pt-xs-40">
    <div class="container">
        <div class="row mb64 mb-xs-24">
            <div class="col-sm-12">
                <a href="#">
                    <img alt="logo" src="{{asset('storage/img/Logo_LM.svg')}}">
                </a>
            </div>
        </div>
        <div class="row mb64 mb-xs-24">
            <div class="col-md-3 col-sm-4">
                <ul>
                    <li><a href="{{url('/')}}">
                            <h5 class="uppercase mb16 fade-on-hover">@lang('footer.home')</h5>
                        </a></li>
                    <li><a href="{{url('/about-us')}}">
                            <h5 class="uppercase mb16 fade-on-hover">@lang('footer.about')</h5>
                        </a></li>
                    <li><a href="{{url('/meniu')}}">
                            <h5 class="uppercase mb16 fade-on-hover">@lang('footer.menu')</h5>
                        </a></li>
                </ul>
            </div>

            <div class="col-md-3 col-sm-4">
                <ul>
                    <li><a href="{{url('/contact')}}">
                            <h5 class="uppercase mb16 fade-on-hover">@lang('footer.contact')</h5>
                        </a></li>
                    <li><a href="{{url('/faq')}}">
                            <h5 class="uppercase mb16 fade-on-hover">@lang('footer.faq')</h5>
                        </a></li>
                        <li><a href="{{url('/login')}}">
                            <h5 class="uppercase mb16 fade-on-hover">@lang('footer.Login')</h5>
                        </a></li>
                </ul>
            </div>

            <div class="col-md-4 col-md-offset-2 col-sm-4">
                <p class="lead">@lang('footer.social')</p>
                <ul class="list-inline social-list">
                    <li><a href="https://www.facebook.com/lemonelline.official/"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com/lemonelline.official/"><i class="fab fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row fade-half">
            <div class="col-sm-12 text-center">
                <span>@lang('footer.copyright')</span>
            </div>
        </div>
    </div>
</footer>


