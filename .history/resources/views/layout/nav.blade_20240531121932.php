<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="../assets/css/socialv.css?v=4.0.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha256-YLGeXaapI0/5IgZopewRJcFXomhRMlYYjugPLSyNjTY=" crossorigin="anonymous" />
    <link rel="icon" href={{ asset('/assets/images/favicon.ico') }} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('assets/css/nav.css') }}>
    @livewireStyles
    @yield('css')
    @yield('script')
</head>
<body>
    @auth
        <nav>
            <ul class="nav-ul">

            @switch(auth()->user()->role)
                @case('admin')
                    <li class="first">
                        <a href=" {{ route('admin') }} ">
                            <img src="{{  asset('/assets/images/nav.png') }}" alt="Nav Logo" />
                        </a>
                    </li>
                    @break

                @case('hero')
                    <li class="first">
                        <a href=" {{ route('hero') }} ">
                            <img src="{{  asset('/assets/images/nav.png') }}" alt="Nav Logo" />
                        </a>
                    </li>
                    @break

                @case('user')
                    <li class="first">
                        <a href=" {{ route('user') }} ">
                            <img src="{{  asset('/assets/images/nav.png') }}" alt="Nav Logo" />
                        </a>
                    </li>
                    @break

                @default

            @endswitch

                <li class="second">
                    <span>
                        Welcome 
                    </span>
                    @if ()
                        
                    @endif()->user()->role == 'hero'
                    <a class="second odd" href="{{ route('hero-profile',auth()->user()->id) }}">
                        {{auth()->user()->firstName . ' ' . auth()->user()->lastName }}
                    </a>
                </li>
                <form class="d-flex" action="{{ route('news.index') }}" role="search">
                    @csrf
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                    <button class="nav-btn btn-outline-success" type="submit">Search</button>
                </form>
                <li><a class="third even" href="{{ route('support') }}">Support</a></li>
                <li><a class="third odd" href="{{ route('news.index') }}">News</a></li>

            @switch(auth()->user()->role)
                @case('admin')
                    <li><a class="third odd" href="{{ route('news.create') }}">Create New News</a></li>
                    <li><a class="third even" href="{{ route('heros.show_requests') }}">Heros Request</a></li>
                    @break

                @case('hero')
                    <li><a class="third even" href="{{ route('news.create') }}">Create New News</a></li>
                    @break

                @default

                @endswitch

                {{-- @section('admin-nav')
                    <li><a class="third even" href="{{ route('news.create') }}">Create New News</a></li>
                @show --}}

                <li><a class="third even" href="#">Search by photo</a></li>
                <li><a class="third odd" href="#">Content</a></li>
                <li><a class="third even" href="{{ route('about') }}">About</a></li>
                <li class="third">
                    <form action="/logout" method="post">
                    @csrf
                        <button class="third even" type="submit">Log out</button>
                    </form>
                </li>
            </ul>
        </nav>

@yield('content')

    <footer class="iq-footer bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="{{ route('terms') }}">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    <p>Copyright 2024 </p> <a href="#">Heros</a><p> All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>


        @livewireScripts
    @endauth
</body>
</html>
