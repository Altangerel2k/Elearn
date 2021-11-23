<!DOCTYPE html>
<!--
01000010 01001001 01010100 01010011 01101111 01100110 01110100
          ____ _____ _______ _____        __ _
         |  _ \_   _|__   __/ ____|      / _| |
         | |_) || |    | | | (___   ___ | |_| |_
         |  _ < | |    | |  \___ \ / _ \|  _| __|
         | |_) || |_   | |  ____) | (_) | | | |_
         |____/_____|  |_| |_____/ \___/|_|  \__|

01000010 01001001 01010100 01010011 01101111 01100110 01110100
-->
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- Favicon and Touch Icons -->
    <link href="{{asset('theme/images/shfavicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('theme/images/shfavicon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('theme/images/shfavicon72x72.png')}}" rel="apple-touch-icon" sizes="72x72">
    <link href="{{asset('theme/images/shfavicon114x114.png')}}" rel="apple-touch-icon" sizes="114x114">
    <link href="{{asset('theme/images/shfavicon144x144.png')}}" rel="apple-touch-icon" sizes="144x144">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Онлайн сургалт</title>

    <!-- Styles -->
    <!-- Css Files -->
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="{{asset('theme/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('theme/css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link href="{{asset('theme/css/menuzord-megamenu.css')}}" rel="stylesheet"/>
    <link id="menuzord-menu-skins" href="{{asset('theme/css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('theme/css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('theme/css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('theme/css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('theme/css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
     <link href="{{asset('theme/css/style.css')}}"  rel="stylesheet" type="text/css">

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{asset('theme/js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('theme/js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('theme/js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{asset('theme/css/colors/theme-skin-color-set1.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->
    <script src="{{asset('theme/js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script src="{{asset('theme/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('theme/js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('theme/js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('theme/js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('theme/js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper">
    <!-- preloader -->
    <div id="preloader">
        <div id="spinner">
            <div class="preloader-dot-loading">
                <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
            </div>
        </div>

    </div>

        @include('front.partial.nav')
    <div id="snav" class="en">
        <ul>
            <li><a href="https://www.facebook.com/YPCmng/" ><span>Залуу сэтгэцийн эмч</span> <i
                            class="fa fa-facebook" style="background-color: #8350DD; color:#ffffff"></i> </a></li>
            <li><a href="https://www.facebook.com/MentalHealthMGL/"  > <span>СЭМҮТ</span><i style="background-color: #4EC5DB; color:#ffffff" class="fa fa-facebook"></i>
                </a></li>
            <li><a href="/contact"> <span>Асуулт хариулт</span><i style="background-color: #3DC25D; color:#ffffff" class="fa fa-question"></i> </a></li>

        </ul>
    </div>
    <div class="main-content">
        @yield('main')
    </div>



    @include('front.partial.footer')
    <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
</div>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-113152433-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-113152433-1');
</script>




<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('theme/js/custom.js')}}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
			(Load Extensions only on Local File Systems ! 
			 The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('theme/js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>

@yield('script')

</body>
</html>
