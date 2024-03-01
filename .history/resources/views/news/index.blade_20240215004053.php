@extends('layout.nav')
@section('title')
Heros | NEWS
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/news.css') }}">
@endsection
@section('content')

<div class="news">
    @foreach ($news as $new)
        <b>{{ $new->'title' }}</b>
        <br>
        <img src="{{ $new->'image' }}" alt="Luffy">
        <p>{{ $new->'content' }}</p>
    @endforeach
</div>
@endsection
