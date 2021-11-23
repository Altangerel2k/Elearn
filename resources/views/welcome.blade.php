<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->


    <link href="{{ asset('css/mbapp.css') }}" rel="stylesheet">

    {{--<link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('theme/css/style.css')}}" rel="stylesheet">--}}



</head>
<body id="page-top" class="landing-page">

@include('front.partial.nav')

@include('front.partial.slide')

@include('front.partial.aboutus')

@include('front.partial.doneworks')
@include('front.partial.contact')

<!-- Scripts -->
<script src="{{ asset('js/front.js') }}"></script>

@yield('script')
</body>
</html>
