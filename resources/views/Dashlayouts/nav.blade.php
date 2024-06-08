<!-- BEGIN: Header-->
<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-dark">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="collapse navbar-collapse show" id="navbar-mobile">
                <ul class="nav navbar-nav mr-auto float-left">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"> </i></a></li>
                    <li class="nav-item d-none d-md-block">
                        <a class="nav-link nav-link-expand" href="#">
                            <i class="ficon ft-maximize"></i></a>
                    </li>



                </ul>
                <ul class="nav navbar-nav float-right">
                    <li class="dropdown dropdown-language nav-item">
                        @if (App::getLocale() == 'ar')
                            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-eg"></i>
                                <span class="selected-language">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
                            </a>
                        @else
                            <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="flag-icon flag-icon-us"></i>
                                <span class="selected-language">{{ LaravelLocalization::getCurrentLocaleName() }}</span>
                            </a>

                        @endif
                        <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                            <div class="arrow_box">
                                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)

                                    <a class="dropdown-item"  hreflang="{{ $localeCode }}"
                                       href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        @if ( $properties['native'] == 'English')
                                            <i class="flag-icon flag-icon-us"></i> {{ $properties['native'] }}

                                        @else
                                            <i class="flag-icon flag-icon-eg"></i> {{ $properties['native'] }}
                                        @endif
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </li>

                    <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown"> <span class="avatar avatar-online">
                                <img src="{{ URL::asset('theme/ltr/app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar"><i></i></span></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="arrow_box_right">
                                <a class="dropdown-item" href="#">
                                    <span class="avatar avatar-online">
                                        <img src="{{ URL::asset('theme/ltr/app-assets/images/portrait/small/avatar-s-19.png') }}" alt="avatar">
{{--                                        {{ Auth::user()->name }}--}}
                                        <span class="user-name text-bold-700 ml-1">{{ Auth::user()->name }}</span>
                                    </span>
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="ft-power"></i> Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->
