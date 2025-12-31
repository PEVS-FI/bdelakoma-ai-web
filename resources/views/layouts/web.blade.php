<!DOCTYPE html>
<html lang="{{ locale() }}">

<head>
    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Michal Drobný">
    <!-- Page Title -->
    <title>{{ __('global.title') }}</title>
    <!-- Icon fonts -->
    @vite('resources/css/themify-icons.css')
    @vite('resources/css/font-awesome.min.css')
    @vite('resources/css/flaticon.css')
    <!-- Bootstrap core CSS -->
    @vite('resources/css/bootstrap.min.css')
    <!-- Plugins for this template -->
    @vite('resources/css/animate.css')
    @vite('resources/css/owl.carousel.css')
    @vite('resources/css/owl.theme.css')
    @vite('resources/css/slick.css')
    @vite('resources/css/slick-theme.css')
    @vite('resources/css/odometer-theme-default.css')
    @vite('resources/css/owl.transitions.css')
    @vite('resources/css/jquery.fancybox.css')
    @vite('resources/css/magnific-popup.css')
    <!-- Custom styles for this template -->
    @vite('resources/css/style.css')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>

<body id="home">
<!-- start page-wrapper -->
<div class="page-wrapper">
    <!-- start preloader -->
    <div class="preloader">
        <div class="lds-ripple">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- end preloader -->

    @include('include.header')

    @yield('content')

    @include('include.footer')

</div>
<!-- All JavaScript files
================================================== -->
<script src="{{ asset('assets/js/jquery.min.js')  }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')  }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js')  }}"></script>
<script src="{{ asset('assets/js/metisMenu.min.js')  }}"></script>
<!-- Plugins for this template -->
<script src="{{ asset('assets/js/jquery-plugin-collection.js')  }}"></script>
<!-- Custom script for this template -->
<script src="{{ asset('assets/js/script.js')  }}"></script>

</body>

</html>