@extends('news.index')
@section('title')
Heros | all News
@endsection

@section('css')
    @parent
@endsection


@section('admin-nav')
    @parent
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
                <strong>
                    <a href="/user">
                        {{ 'By '. $new->firstName.' '.$new->lastName }}
                    </a>
                </strong>
                @if ($new->created_at == $new->updated_at)
                    {{ ", created at" }} {{ date("Y-m-d h:m",strtotime($new->created_at)) }}
                @else
                    {{ ", updated at" }} {{ date("Y-m-d h:m",strtotime($new->updated_at)) }}
                @endif
                <b>{{$new->title }}</b>
                <br>
                <img src="{{ asset("assets/images/news/".$new->image) }}" alt="{{ $new->title }}">
                <p >{{ substr($new->content,0,30)."..." }}</p>
                <a class="btn btn-primary" href="{{ route('news.show',$new->id) }}" role="button">Read</a>

                @if ((auth()->user()->role == 'admin') || ((auth()->user()->role == 'hero') && auth()->user()->id == $news->user_id))
                <a class="btn btn-primary" href="{{ route('news.edit',$new->id) }}" role="button">Edit</a>
                <form action="{{ route('news.delete',$new->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" name="post-delete-form" value="Delete">
                </form>
                @endif
            </div>
        @endforeach
    @endif
</div>
@endsection
