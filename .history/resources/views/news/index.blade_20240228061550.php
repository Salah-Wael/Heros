@extends('layout.nav')
@section('title')
Heros | NEWS
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/news.css') }}">
@endsection

@section('admin-nav')
    @if (auth()->user()->role == 'admin')
        @parent
    @endif
@endsection

@section('content')
@if (session('success'))
    <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('success')  }}
    </div>
    {!! '<br><br>' !!}
    @endif
<div class="news">
    @if ($news)
    @foreach($news as $new)
    <div class="card mb-3 news_card">
        <b>{{$new->title }}</b>
        <br>
        <img src="{{ asset("assetsimages/news/".$news->images) }}" alt="{{ $new->title }}">
        <p>{{ $new->content }}</p>
    </div>
    @endforeach
    @endif
</div>
@endsection
