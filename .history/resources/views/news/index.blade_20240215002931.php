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
<b>{{ $news->'title' }}</b>
    <br>
    <img src="{{ $news->'content' }}" alt="Luffy">
    <p>{{ $news->'content' }}</p>
  @endforeach

</div>
@endsection
