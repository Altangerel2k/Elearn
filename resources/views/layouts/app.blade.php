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


    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/plugins/dataTables/datatables.min.css') }}" rel="stylesheet">
    {{--<link href="{{asset('theme/css/animate.css')}}" rel="stylesheet">--}}
    {{--<link href="{{asset('theme/css/style.css')}}" rel="stylesheet">--}}



</head>
<body>
<div id="wrapper">

    @include("partial.nav")

    <div id="page-wrapper" class="gray-bg dashbard-1">

        @include('partial.navtopright')

        <div class="row  border-bottom gray-bg">

            @yield('content')

        </div>

    </div>

</div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
<script src="{{asset('js/plugins/dataTables/datatables.min.js')}}"></script>
<script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    @yield('script')
</body>
</html>
