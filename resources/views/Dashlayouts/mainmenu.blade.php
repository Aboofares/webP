<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true" data-img="{{ URL::asset('theme/ltr/app-assets/images/backgrounds/04.jpg') }}">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
            <li class="nav-item mr-auto">
                <a class="navbar-brand" href="#">
                    <img class="brand-logo" alt="Chameleon admin logo" src="{{ URL::asset('theme/ltr/app-assets/images/logo/logo.png') }}" />
                    <h3 class="brand-text">{{trans('mainTrans.Program')}}</h3>
                </a></li>
            <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-disc font-medium-3" data-ticon="ft-disc"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link close-navbar"><i class="ft-x"></i></a></li>
        </ul>
    </div>
    <div class="navigation-background"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <li class=" nav-item">
                <a href="#">
                    <i class="ft-home"></i>
                    <span class="menu-title" data-i18n="">{{trans('mainTrans.Dashboard')}} </span>
                </a>
                <ul class="menu-content">
                    <li>
                        <a class="menu-item" href="{{ url('/profile') }}">{{trans('mainTrans.Profile')}}</a>
                    </li>
                </ul>
            </li>
            <li class=" nav-item">
                <a href="#"><i class="ft-layers"></i><span class="menu-title" data-i18n="">{{trans('mainTrans.Application')}}</span></a>
                <ul class="menu-content">
                    <li><a class="menu-item" href="#">{{trans('mainTrans.Settings')}}</a>
                        <ul class="menu-content">
                            <li><a class="menu-item" href="{{ route('AccountType.index') }}">{{trans('mainTrans.Account_Types')}} </a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="menu-item" href="{{ url('/Settings') }}">{{trans('mainTrans.Common_Settings')}}</a>
                    </li>
{{--                    {{ route('Common-settings') }}--}}
                </ul>
            </li>
        </ul>
    </div>
</div>
<!-- END: Main Menu-->
