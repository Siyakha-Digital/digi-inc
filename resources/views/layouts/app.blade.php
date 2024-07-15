<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>The Digi Inc</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}">
</head>
<body>
    <div class="main-wrapper">

        {{-- Application Header --}}
        @include('components.nav-bar')


        <main>
            @yield('content')
        </main>
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>
        <div class="back-to-top">
            <a class="back-to-top-icon align-items-center justify-content-center d-flex" href="#top">
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-scrollspy.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/feather.min.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/aos.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.waypoints.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/jquery.counterup.min.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script src="{{ asset('assets/js/script.js')}}" type="42ab658cf140d6ef405ee4be-text/javascript"></script>
    <script type="42ab658cf140d6ef405ee4be-text/javascript">
        var Tawk_API = Tawk_API || {}
            , Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script")
                , s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/5d7c946e9f6b7a4457e1a16b/default';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();

    </script>
    <script src="{{ asset('assets/js/rocket-loader.min.js')}}" data-cf-settings="42ab658cf140d6ef405ee4be-|49" defer></script>
</body>
</html>
