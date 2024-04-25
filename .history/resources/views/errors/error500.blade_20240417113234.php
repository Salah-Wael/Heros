@extends('errors.error404')

@section('title')
Error 500
@endsection

@section('content')
    <img src="{{asset('../assets/images/error/500.png')}}" class="img-fluid iq-error-img" alt="error 500">
    <h2 class="mb-0 text-center">Oops! This Page is Not Working.</h2>
    <p class="text-center">The requested is Internal Server Error.</p>
@endsection