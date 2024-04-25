@extends('layout.nav')
@section('title')
Heros | News
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/assets/css/news.css') }}">
@endsection

{{-- @section('admin-nav')
    @if (auth()->user()->role == 'admin')
        @parent
    @endif
@endsection --}}

@section('content')
    @if (session('success'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
            {{ session('success')  }}
        </div>
        {!! '<br><br>' !!}
    @endif
    <div class="col-lg-4 col-md-6">
        <div class="single-latest-news">
            <a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
            <div class="news-text-box">
                <h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
                <p class="blog-meta">
                    <span class="author"><i class="fas fa-user"></i> Admin</span>
                    <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                </p>
                <p class="excerpt">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus laborum autem, dolores inventore, beatae nam.</p>
                <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
            </div>
        </div>
    </div>
    
<div class="news">
    @if ($news)
        @foreach($news as $new)

            <div class="card mb-3 news_card">
                <strong>
                    {{ 'By ' }}
                    <a href="/user">
                        {{ $new->firstName.' '.$new->lastName }}
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

                @if (strlen($new->content) > 30)
                    <p>{{ substr($new->content, 0, 30) }}...</p>
                @else
                    <p >{{ substr($new->content,0,30) }}</p>
                @endif

                <a class="btn btn-primary" href="{{ route('news.show',$new->id) }}" role="button">Read</a>
            </div>
        @endforeach
    @endif
</div>
@endsection
