@extends('layout.error')
@section('title')
    error 404
@endsection
{{-- @section('css')
@endsection --}}

@section('content')
<img src="{{ asset('assets/images/error/404.png') }}" alt="error 404" style="width: 0%">
@endsection
