@extends('layout.nav')
@section('title')
Heros | News
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/css/news.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
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
                <img src="{{ asset("assets/images/news/".$new->image) }}" alt="{{ $new->title }}">
                <p >{{$new->content }}</p>
                <a class="btn btn-primary" href="{{ route('news.show',$new->id) }}" role="button">Read</a>
            </div>
        @endforeach
    @endif
</div>
@endsection
