<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
<link rel="icon" href={{ asset('/assets/images/favicon.ico') }} type="image/x-icon">
    @yield('css')
    <link rel="stylesheet" href={{ asset('assets/css/nav.css') }}>
</head>
<body>
    @auth
        <nav>
        <ul class="nav-ul">
            <li class="first"><a href="/"><img src="{{  asset('/assets/images/nav.png') }}" alt="" /></a></li>
            <li class="second"><a href="#">{{'Welcome ' . auth()->user()->firstName . ' ' . auth()->user()->lastName }}</a></li>
            <form class="d-flex" role="search">
            @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="nav-btn btn-outline-success" type="submit">Search</button>
            </form>
            <li class="third odd"><a href="#">Information</a></li>
            <li class="third even"><a href="about">About</a></li>
            <li class="third odd"><a href="#">Culture</a></li>
            <li class="third even"><a href="support">Support</a></li>
            <li class="third odd"><a href="news">News</a></li>
            <li class="third even"><a href="#">Content</a></li>
            <li class="third odd">
                <form action="/logout" method="post">
                @csrf
                    <button type="submit">Log out</button>
                </form>
            </li>
            </ul>
        </nav>

        @yield('content')

        <footer>
            <p>copyright &copy; 2024</p>
        </footer>
    @endauth
</body>
</html>
