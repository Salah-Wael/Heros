@extends('layout.error')
@section('title')
    Error 404
@endsection
{{-- @section('css')
@endsection --}}

@section('content')
{{-- <div id="loading">
        <div id="loading-center">
        </div>
    </div>
    <!-- loader END --> --}}

    <div class="wrapper">
    <div class="container p-0">
        <div class="row no-gutters height-self-center">
            <div class="col-sm-12 text-center align-self-center">
                <div class="iq-error position-relative mt-5">
                    <img src="{{asset('assets/images/error/404.png')}} " class="img-fluid iq-error-img" alt="error 404">
                    <h2 class="mb-0 text-center">Oops! This Page is Not Found.</h2>
                    <p class="text-center">The requested page dose not exist.</p>
                    <a class="btn btn-primary mt-3" href="index.html"><i class="ri-home-4-line"></i>Back to Home</a>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
