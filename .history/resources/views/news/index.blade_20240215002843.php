@extends('layout.nav')
@section('title')
Heros | NEWS
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/news.css') }}">
@endsection
@section('content')
<div class="news">
  @foreach ($news as $one)
<b>{{ $news-> }}</b>
    <br>
    <img src="./img/Luffy.jfif" alt="Luffy">
    <p></p>
  @endforeach

</div>
@endsection
