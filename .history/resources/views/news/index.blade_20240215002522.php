@extends('layout.nav')
@section('title')
Heros | NEWS
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/news.css') }}">
@endsection
@section('content')
<div class="news">
  @for
  <b>Luffy</b>
  <br>
  <img src="./img/Luffy.jfif" alt="Luffy">
  <p>Lorem Ipsum is simply dummy text
        of the printing and typesetting
        industry.
  </p>
</div>
@endsection
