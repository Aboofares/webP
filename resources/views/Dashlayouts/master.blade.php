
<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Portfolio, elegant design, clean and organized code.">
    <meta name="keywords" content="Portfolio">
    <meta name="author" content="Mostafa Assem">
    <link rel="apple-touch-icon" href="{{ URL::asset('theme/rtl/app-assets/images/ico/apple-icon-120.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('theme/rtl/app-assets/images/ico/favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,400i,600,600i,700,700i%7CComfortaa:300,400,700" rel="stylesheet">
    @include('Dashlayouts.head')
    @yield('customCSS')
</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-color="bg-gradient-x-purple-red" data-col="2-columns">

@include('Dashlayouts.nav')
@include('Dashlayouts.mainmenu')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="content-wrapper-before"></div>
        <div class="content-header row">
            <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                <h3 class="content-header-title mb-0 d-inline-block">@yield('Page_title')</h3>
                <div class="breadcrumbs-top d-inline-block">
                    <div class="breadcrumb-wrapper mr-1">
                        <ol class="breadcrumb">
{{--                            <li class="breadcrumb-item">--}}
{{--                                <a href="{{ route('dashboard') }}">Dashboard</a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item">--}}
{{--                                <a href="#">DataTables</a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item active">--}}
{{--                                Basic DataTables--}}
{{--                            </li>--}}
{{--                            <?php $segments = ''; ?>--}}
{{--                            @foreach(Request::segments() as $segment)--}}
{{--                                <?php $segments .= '/'.$segment; ?>--}}
{{--                                <li class="breadcrumb-item">--}}
{{--                                    <a href="{{ $segments }}">{{$segment}}</a>--}}
{{--                                </li>--}}
{{--                            @endforeach--}}
                            @for($i = 2; $i <= count(Request::segments()); $i++)
                                <li class="breadcrumb-item">
                                    <a href="{{ URL::to( implode( '/', array_slice(Request::segments(), 0 ,$i, true)))}}">
                                        {{strtoupper(Request::segment($i))}}
                                    </a>
                                </li>
                            @endfor
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-body">
            @yield('content')
        </div>
    </div>
</div>





@include('Dashlayouts.footer')
@include('Dashlayouts.footer-scripts')
@yield('customScript')

</body>


</html>
