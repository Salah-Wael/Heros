<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('/assets/css/socialv.css?v=4.0.0')}}">
    <link rel="stylesheet" href="{{asset('/assets/vendor/remixicon/fonts/remixicon.css')}}">
</head>
<body>
    @yield('content')
</body>
</html>

{{-- <!-- Backend Bundle JavaScript -->
    <script src="{{asset('/assets/js/libs.min.js')}}"></script>
    <!-- slider JavaScript -->
    <script src="{{asset('/assets/js/slider.js')}}"></script>
    <!-- masonry JavaScript -->
    <script src="{{asset('/assets/js/masonry.pkgd.min.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('/assets/js/enchanter.js')}}"></script>
    <!-- SweetAlert JavaScript -->
    <script src="{{asset('/assets/js/sweetalert.js')}}"></script>
    <!-- app JavaScript -->
    <script src="{{asset('/assets/js/charts/weather-chart.js')}}"></script>
    <script src="{{asset('/assets/js/app.js')}}"></script>
    <script src="{{asset('/vendor/vanillajs-datepicker/dist/js/datepicker.min.js')}}"></script>
    <script src="{{asset('/assets/js/lottie.js')}}"></script> --}}
