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

{{-- <div class="col-lg-12">
<div class="card card-block card-stretch card-height blog-list list-even">
<div class="card-body">
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="blog-description p-2">
            <div class="date mb-2"><a href="#" tabindex="-1">4 Month ago</a></div>
            <h5 class="mb-2">Containing coronavirus spread comes</h5>
            <p>In the blogpost, the IMF experts observed, "Success in containing the virus comes at the price of slowing economic activity."</p> <a href="#" tabindex="-1">Read More <i class="ri-arrow-right-s-line"></i></a>
            <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between position-right-side">
                <div class="iq-media-group">
                    <a href="#" class="iq-media">
                    <img class="img-fluid rounded-circle" src="../assets/images/icon/01.png" alt="">
                    </a>
                    <a href="#" class="iq-media">
                    <img class="img-fluid rounded-circle" src="../assets/images/icon/02.png" alt="">
                    </a>
                    <a href="#" class="iq-media">
                    <img class="img-fluid rounded-circle" src="../assets/images/icon/03.png" alt="">
                    </a>
                    <a href="#" class="iq-media">
                    <img class="img-fluid rounded-circle" src="../assets/images/icon/07.png" alt="">
                    </a>
                </div>                                 
                <div class="comment"><i class="ri-chat-3-line me-2"></i>7 comments</div>
            </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="image-block">
            <img src="../assets/images/blog/06.jpg" class="img-fluid rounded w-100" alt="blog-img">
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="card card-block card-stretch card-height blog-list">
    <div class="card-body">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="image-block">
                <img src="../assets/images/blog/07.jpg" class="img-fluid rounded w-100" alt="blog-img">
                </div>
            </div>
            <div class="col-md-6">
                <div class="blog-description p-2">
                <div class="blog-meta d-flex align-items-center justify-content-between mb-2">
                    <div class="date"><a href="#" tabindex="-1">4 Month ago</a>
                    </div>
                </div>
                <h5 class="mb-2">Containing coronavirus spread comes</h5>
                <p>In the blogpost, the IMF experts observed, "Success in containing the virus comes at the price of slowing economic activity."</p> <a href="#" tabindex="-1">Read More <i class="ri-arrow-right-s-line"></i></a>
                <div class="group-smile mt-4 d-flex flex-wrap align-items-center justify-content-between position-right-side">
                    <div class="iq-media-group">
                        <a href="#" class="iq-media">
                        <img class="img-fluid rounded-circle" src="../assets/images/icon/01.png" alt="">
                        </a>
                        <a href="#" class="iq-media">
                        <img class="img-fluid rounded-circle" src="../assets/images/icon/02.png" alt="">
                        </a>
                        <a href="#" class="iq-media">
                        <img class="img-fluid rounded-circle" src="../assets/images/icon/03.png" alt="">
                        </a>
                        <a href="#" class="iq-media">
                        <img class="img-fluid rounded-circle" src="../assets/images/icon/07.png" alt="">
                        </a>
                    </div>                                 
                    <div class="comment"><i class="ri-chat-3-line me-2"></i>7 comments</div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}

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
                {{dd$new->title }}
                <br>
                {{-- @foreach ( $news->tags  as $tag)
                    <span class="badge badge-primary">
                        {{ $tag->tag }}
                    </span>
                @endforeach
                <br> --}}
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
