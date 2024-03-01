@extends('layout.nav')
@section('title')
Heros | NEWS
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/news.css') }}">
@endsection
@section('content')
@if (session('success'))
    <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
    {{ session('success')  }}
    </div>
    {!! '<br><br>' !!}
    @endif
<div class="news">
    @if ()

    
    @foreach($news as $new)
        <b>{{$new->title }}</b>
        <br>
        <img src="{{ $new->image }}" alt="Luffy">
        <p>{{ $new->content }}</p>
    @endforeach
</div>
@endsection
