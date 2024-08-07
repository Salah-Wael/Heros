@auth

@extends('layout.nav')

@section('title')
    Heros | show news
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/show-post.css') }}">
@endsection

@section('content')

    @if (session('success'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
            {{ session('success')  }}
        </div>
        {!! '<br><br>' !!}
    @endif
    
    

    <section class="mt-4">
    <!--Grid row-->
    <div class="row">

        <!--Grid column-->
        <div class="col-md-8 mb-4">
            <h3 class="my-2">{{ $news->title }}</h3>

            <small id="article-meta">
                <strong>
                    {{ 'By ' }}
                    <a href="/user">
                        {{ $news->user->firstName.' '.$news->user->lastName }}
                    </a>
                </strong>
                @if ($news->created_at == $news->updated_at)
                {{ ", created at" }} {{ date("Y-m-d h:i A",strtotime($news->created_at)) }}
                @else
                {{ ", updated at" }} {{ date("Y-m-d h:i A",strtotime($news->updated_at)) }}
                @endif

            </small>

            <div class=badge badge-primary>

            </div>
            <!--Featured Image-->
            <div class="card my-4 mb-4">
                <img src="{{ asset("assets/images/news/".$news->image) }}">
            </div>
            <!--/.Featured Image-->
            
            <div class="card mb-4">
                <div class="card-body">{!! nl2br($news->content) !!}</div>
            </div>
            
            @yield('buttons')

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-4 mb-4">

            <!--/.Card : Dynamic content wrapper-->

            <!--Card-->
            <div class="card mb-4 wow fadeIn">

                <div class="card-header">Related articles</div>

                <!--Card content-->
                <div class="card-body">
                    <!-- If there are related posts -->
                    <ul class="list-unstyled">
                        <!-- Loop over posts -->
                        <li class="media related-post">
                            <div class="media-body">
                                <a href="/posts">
                                    <h5 class="mt-0 mb-1 font-weight-bold">Post Title</h5>
                                </a>
                                This is post body
                            </div>
                        </li>
                    </ul>
                    <h4>There are no related posts!</h4>
                </div>

            </div>
            <!--/.Card-->

        </div>
        <!--Grid column-->

    </div>
    <!--Grid row-->

    </section>
    <!--Section: Post-->
    @endsection
@endauth
