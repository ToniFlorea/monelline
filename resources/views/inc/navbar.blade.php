{{-- <div class="nav-container"> --}}
    <nav class="bg-dark">
        <div class="nav-bar text-center">
            <div class="col-md-2 col-md-push-5 col-sm-12 text-center">
                <a href="/">
                    <img alt="logo" class="image-md" src="{{asset('storage/img/Logo_LM.svg')}}">
                </a>
            </div>
            <div class="col-sm-12 col-md-5 col-md-pull-2 overflow-hidden-xs">
                <ul class="menu inline-block pull-right">
                    
                    <li class="hide-mobile"><a href="https://www.facebook.com/lemonelline.official/"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="hide-mobile"><a href="https://www.instagram.com/lemonelline.official/"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="{{url('/')}}">Acasa</a></li>
                    <li><a href="{{url('/menu')}}">Meniu</a></li>
                    
                </ul>
            </div>
            <div class="col-sm-12 col-md-5 pb-xs-24">
                <ul class="menu">
                    <li><a href="{{url('/about-us')}}">Despre noi</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                        <li><a href="{{url('/faq')}}">FAQ</a></li>
                </ul>
            </div>
        </div>
        <div class="module widget-handle mobile-toggle right visible-sm visible-xs absolute-xs">
            <i class="ti-menu"></i>
        </div>
    </nav>
{{-- </div> --}}