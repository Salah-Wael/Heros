@extends('layout.nav')
@section('title')
Heros | admin
@endsection
@section('css')
    <link rel="stylesheet" href={{ asset('assets/css/nav.css') }}>
@endsection
@section('admin-nav')
    @parent
@endsection
@section('content')

@endsection
