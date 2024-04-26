@extends('layout.error')
@section('title')
    Error 404
@endsection
{{-- @section('css')
@endsection --}}




{{-- <!doctype html> --}}
{{-- <html lang="en"> --}}
  {{-- <head> --}}
    {{-- <meta charset="utf-8"> --}}
      {{-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> --}}
      {{-- <title>@yield('title', 'Error 404')</title> --}}

      {{-- <link rel="shortcut icon" href="{{asset('../assets/images/favicon.ico')}}" />
      <link rel="stylesheet" href="{{asset('../assets/css/libs.min.css')}}">
      <link rel="stylesheet" href="{{asset('../assets/css/socialv.css?v=4.0.0')}}">
      <link rel="stylesheet" href="{{asset('../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('../assets/vendor/remixicon/fonts/remixicon.css')}}">
      <link rel="stylesheet" href="{{asset('../assets/vendor/vanillajs-datepicker/dist/css/datepicker.min.css')}}">
      <link rel="stylesheet" href="{{asset('../assets/vendor/font-awesome-line-awesome/css/all.min.css')}}">
      <link rel="stylesheet" href="{{asset('../assets/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css')}}"> --}}

  {{-- </head> --}}
  @section('content')
  {{-- <img src="{{ asset('assets/images/error/404.png') }}" alt="error 404" style="hieght: 100%; width: 100%;"> --}}
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
                    {{-- @section('content') --}}
                    {{-- <img src="{{asset('assets/images/error/404.png')}} " class="img-fluid iq-error-img" alt="error 404"> --}}
                    <h2 class="mb-0 text-center">Oops! This Page is Not Found.</h2>
                    <p class="text-center">The requested page dose not exist.</p>
                    {{-- @endsection --}}
                    <a class="btn btn-primary mt-3" href="index.html"><i class="ri-home-4-line"></i>Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    </div>
  @endsection
  {{-- <body class=" "> --}}
    <!-- loader Start -->
    {{-- <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END -->

    <div class="wrapper">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 text-center align-self-center">
                <div class="iq-error position-relative mt-5">
                    @section('content')
                    <img src="{{asset('../assets/images/error/400.png')}} " class="img-fluid iq-error-img" alt="error 404">
                    <h2 class="mb-0 text-center">Oops! This Page is Not Found.</h2>
                    <p class="text-center">The requested page dose not exist.</p>
                    @endsection
                    <a class="btn btn-primary mt-3" href="index.html"><i class="ri-home-4-line"></i>Back to Home</a>
                </div>
        </div>
            </div>
    </div>
    </div> --}}



</body>
</html>
