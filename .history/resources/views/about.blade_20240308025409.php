@extends('layout.nav')
@section('title')
Heros | about
@endsection
@section('css')

@endsection

{{-- @section('admin-nav')
    @if (auth()->user()->role == 'admin')
        @parent
    @endif
@endsection --}}

@section('content')
About
@endsection

