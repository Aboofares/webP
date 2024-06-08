<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        @include('Weblayouts.head')
    </head>
    <body>
    @include('Weblayouts.section.areaStart')
    @include('Weblayouts.section.welcom')
    @include('Weblayouts.section.demos')
    @include('Weblayouts.section.application')
    @include('Weblayouts.section.appsPages')
    @include('Weblayouts.section.appsPages')
    @include('Weblayouts.section.layoutvv')
    @include('Weblayouts.section.advancecard')
    @include('Weblayouts.section.component')
    @include('Weblayouts.section.features')
    @include('Weblayouts.section.pricing')



    @include('Weblayouts.footer')
    @include('Weblayouts.footer-scripts')
    </body>
</html>
