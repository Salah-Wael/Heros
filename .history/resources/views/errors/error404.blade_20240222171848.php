@extends('layout.error')
@section('title')
error 404
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
