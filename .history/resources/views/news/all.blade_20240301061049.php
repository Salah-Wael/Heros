@extends('news.index')
@section('title')
Heros | All News
@endsection

@section('css')
    @parent
@endsection
{{-- {{ dd($news) }} --}}
@section('buttons')
    @parent
    @foreach($news as $new)
    <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}" role="button">Edit</a>
    <a class="btn btn-danger" href="{{ route('news.delete',$new->id) }}" role="button">Delete</a>
    
@endsection

{{-- @section('content')
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
                <strong>
                    {{ 'By ' }}
                    <a href="/user">
                        {{ $news->user->firstName.' '.$news->user->lastName }}
                    </a>
                </strong>
                @if ($new->created_at == $new->updated_at)
                    {{ ", created at" }} {{ date("Y-m-d h:m",strtotime($news->created_at)) }}
                @else
                    {{ ", updated at" }} {{ date("Y-m-d h:m",strtotime($news->updated_at)) }}
                @endif
                <b>{{$new->title }}</b>
                <br>
                <img src="{{ asset("assets/images/news/".$new->image) }}" alt="{{ $new->title }}">
                <p >{!! nl2br($new->content) !!}</p>

            </div>
        @endforeach
    @endif
</div>
@endsection --}}
