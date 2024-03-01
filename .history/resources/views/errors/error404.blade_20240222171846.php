@extends('layout.error')
@section('title')
error 
@endsection
@section('css')

@endsection

@section('admin-nav')
    @if (auth()->user()->role == 'admin')
        @parent
    @endif
@endsection

@section('content')
About
@endsection
