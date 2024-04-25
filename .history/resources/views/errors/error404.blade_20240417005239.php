{{-- @extends('layout.error') --}}
{{-- @section('title') --}}
    error 404
{{-- @endsection --}}
{{-- @section('css')
@endsection --}}

{{-- @section('content') --}}
{{-- <img src="{{ asset('assets/images/error/404.png') }}" alt="error 404" style="hieght: 100%; width: 100%;"> --}}
{{-- @endsection --}}



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>error 404</title>

      <link rel="shortcut icon" href="{{asset('../assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('../assets/css/libs.min.css')}}">
      <link rel="stylesheet" href="{{asset('../assets/css/socialv.css?v=4.0.0')}}">
      <link rel="stylesheet" href="{{asset('')}}../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
      <link rel="stylesheet" href="{{asset('')}}../assets/vendor/remixicon/fonts/remixicon.css">
      <link rel="stylesheet" href="{{asset('')}}../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
      <link rel="stylesheet" href="{{asset('')}}../assets/vendor/font-awesome-line-awesome/css/all.min.css">
      <link rel="stylesheet" href="{{asset('')}}../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css">

  </head>
  <body class=" ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->

      <div class="wrapper">
       <div class="container p-0">
            <div class="row no-gutters height-self-center">
               <div class="col-sm-12 text-center align-self-center">
                  <div class="iq-error position-relative mt-5">
                        <img src="../assets/images/error/400.png" class="img-fluid iq-error-img" alt="">
                        <h2 class="mb-0 text-center">Oops! This Page is Not Found.</h2>
                        <p class="text-center">The requested page dose not exist.</p>
                        <a class="btn btn-primary mt-3" href="index.html"><i class="ri-home-4-line"></i>Back to Home</a>
                  </div>
               </div>
            </div>
      </div>
      </div>

    <!-- Backend Bundle JavaScript -->
    <script src="../assets/js/libs.min.js"></script>
    <!-- slider JavaScript -->
    <script src="../assets/js/slider.js"></script>
    <!-- masonry JavaScript -->
    <script src="../assets/js/masonry.pkgd.min.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/enchanter.js"></script>
    <!-- SweetAlert JavaScript -->
    <script src="../assets/js/sweetalert.js"></script>
    <!-- app JavaScript -->
    <script src="../assets/js/charts/weather-chart.js"></script>
    <script src="../assets/js/app.js"></script>
    <script src="../vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>
    <script src="../assets/js/lottie.js"></script>

  </body>
</html>
