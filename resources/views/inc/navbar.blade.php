{{-- <div class="nav-container"> --}}
{{-- <nav class="bg-dark">
    <div class="nav-bar text-center">
        <div class="col-md-2 col-md-push-5 col-sm-12 text-center">
            <a href="/">
                <img alt="logo" class="image-md" src="{{asset('storage/img/Logo_LM.svg')}}">
</a>
</div>
<div class="col-sm-12 col-md-5 col-md-pull-2 overflow-hidden-xs">
    <ul class="menu inline-block pull-right">

        <li><a href="{{url('/menu')}}">@lang('navbar.menu')</a></li>
        <li><a href="{{url('/about-us')}}">@lang('navbar.about')</a></li>
        <li><a href="{{url('/contact')}}">@lang('navbar.contact')</a></li>

    </ul>
</div>

<div class="col-sm-12 col-md-5 pb-xs-24">
    <ul class="menu">
        @guest
        <li><a href="{{url('/login')}}">@lang('auth.login')</a></li>
        <li><a href="{{url('/register')}}">@lang('auth.register')</a></li>
        <li><a href="#" class="disabled">|</a></li>

        @else
        <li><a href="{{url('/register')}}">{{Auth::user()->name}}</a></li>
        <li><a href="#">|</a></li>
        @endguest
        <li><a href="#" class="text-muted">{{ Config::get('languages')[App::getLocale()] }}</a>
            <ul>
                @foreach (Config::get('languages') as $lang => $language)
                @if ($lang != App::getLocale())
                <li>
                    <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                </li>
                @endif
                @endforeach
            </ul>
        </li>
    </ul>
</div>
</div>
<div class="module widget-handle mobile-toggle right visible-sm visible-xs absolute-xs">
    <i class="ti-menu"></i>
</div>
</nav> --}}
{{-- </div> --}}


<nav>

    <div class="nav-bar bg-dark">
        <div class="module left">
            <a href="{{url('/')}}">
                <img class="logo-light" alt="Foundry" height="80%" src="{{asset('storage/img/Logo_LM.svg')}}">
                <img class="logo-dark" alt="Foundry" height="80%" src="{{asset('storage/img/Logo_LM.svg')}}">
            </a>
        </div>
        <div class="module widget-handle mobile-toggle right visible-sm visible-xs">
            <i class="ti-menu"></i>
        </div>
        <div class="module-group right">
            <div class="module left">
                <ul class="menu">
                    <li><a href="{{url('/menu')}}" class="text-white">@lang('navbar.menu')</a></li>
                    <li><a href="{{url('/about-us')}}" class="text-white">@lang('navbar.about')</a></li>
                    <li><a href="{{url('/contact')}}" class="text-white">@lang('navbar.contact')</a></li>
                    <li class="has-dropdown">
                        <a href="#" class="text-white">
                            @lang('navbar.order')
                        </a>
                        <ul>
                            <li>
                                <a href="https://www.foodpanda.ro/restaurant/v1mn/le-monelline" class="foodpanda-text">
                                    FoodPanda
                                </a>
                            </li>
                            <li>
                                <a href="https://www.ubereats.com/ro-RO/timisoara/food-delivery/le-monelline/q3FUJjB5S8iH3XIIFYC6gQ/" class="text-white">
                                    UberEats
                                </a>
                            </li>
                            <li>
                                <a href="https://glovoapp.com/ro/tim/store/le-monelline-/" class="text-white">
                                    Glovo
                                </a>
                            </li>
                            {{-- <li>
                                <a href="#" class="text-white">
                                    EuCeMananc
                                </a>
                            </li> --}}
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="module widget-handle language left">
                <ul class="menu">
                    <li><a href="#" class="text-white has-dropdown">{{ Config::get('languages')[App::getLocale()] }}</a>
                        <ul>
                            @foreach (Config::get('languages') as $lang => $language)
                            @if ($lang != App::getLocale())
                            <li>
                                <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                            </li>
                            @endif
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

    </div>
</nav>