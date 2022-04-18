
<!DOCTYPE html>
<html>

<!-- Mirrored from html.ethic.templaza.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 14:44:52 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ethic - HomePage</title>
    <link href="{{ asset('front/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/fonts/awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>
    <link href='{{ asset('front/css/owl.carousel.css') }}' rel='stylesheet' type='text/css'>
    <link href='{{ asset('front/css/owl.theme.css') }}' rel='stylesheet' type='text/css'>
    <link href="{{ asset('front/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('front/main.css') }}" rel="stylesheet" />
</head>

<body>
    
    @include('includes.header')
    
    @yield('content')
    @include('includes.footer')
    <script>
        var Desktop       =   5,
            tabletportrait    =   2,
            mobilelandscape   =   1,
            mobileportrait    =   1,
            resizeTimer       =   null;
    </script>
    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/off-canvas.js') }}"></script>
    <script src="{{ asset('front/js/jquery.isotope.min.js') }}"></script>
    <script src="{{ asset('front/js/resize.js') }}"></script>
    <script src="{{ asset('front/js/custom-portfolio.js') }}"></script>
    <script src="{{ asset('front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.parallax-1.1.3.js') }}"></script>
    <script src="{{ asset('front/js/custom.js') }}"></script>
</body>

<!-- Mirrored from html.ethic.templaza.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 18 Apr 2022 14:48:42 GMT -->
</html>
