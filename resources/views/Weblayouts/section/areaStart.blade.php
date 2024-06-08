<!-- ***** Header Area Start ***** -->
<header class="header_area headroom">
    <div class="container-fluid" style="width:100% !important;">
        <div class="row align-items-center">
            <!-- Menu Area Start -->
            <div class="col-12">
                <div class="menu_area">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <div class="box-outer">
                            <div class="main_box">
                                <h4 class="mt-2 sm-white text-white"><img src="{{ URL::asset('landingPage/img/bg-img/logo-2.png') }}" alt="logo" class="brand-logo"><b class="ml-2">Chameleon</b></h4>
                            </div>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ca-navbar" aria-controls="ca-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <!-- Menu Area -->
                        <div class="collapse navbar-collapse" id="ca-navbar">
                            <ul class="navbar-nav ml-auto cl-effect-5" id="nav">
                                <li class="nav-item active"><a data-hover="Home" class="nav-link" href="#home">Home</a></li>
                                <li class="nav-item"><a data-hover="Demos" class="nav-link" href="#demos">Demos</a></li>
                                <li class="nav-item"><a data-hover="Applications" class="nav-link" href="#applications">Applications</a></li>
                                <li class="nav-item"><a data-hover="Pages" class="nav-link" href="#pages">Pages</a></li>
                                <li class="nav-item"><a data-hover="Layouts" class="nav-link" href="#layouts">Layouts</a></li>
                                <li class="nav-item"><a data-hover="Cards" class="nav-link" href="#cards">Cards</a></li>
                                <li class="nav-item"><a data-hover="FAQ" class="nav-link" href="#purchase">Purchase</a></li>
                                @if (Route::has('login'))
                                    <li class="nav-item">
                                        @auth
                                            <a  class="nav-link" href="{{ route('dashboard') }}"> dashboard </a>
                                        @else
                                            <a class="nav-link" href="{{ route('login') }}">Log in</a>

                                            @if (Route::has('register'))
                                                <a class="nav-link" href="{{ route('register') }}" > Register </a>
                                            @endif
                                        @endauth
                                    </li>
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
