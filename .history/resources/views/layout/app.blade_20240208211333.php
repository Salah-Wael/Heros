<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="icon" href={{ asset('img/favicon.ico') }} type="image/x-icon">
<link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>
<body>
    @auth
        <nav>
        <ul class="nav-ul">
                <li class="first"><a href="/"><img src="{{  asset('img/nav.png') }}" alt="" /></a></li>
                <li class="se"><a href="#">{{'welcome ' . auth()->user()->name }}</a></li>
                <form class="d-flex" role="search">
                @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <li class="third odd"><a href="#">Information</a></li>
                <li class="third even"><a href="about">About</a></li>
                <li class="third odd"><a href="#">Culture</a></li>
                <li class="third even"><a href="#">Content</a></li>
                <li class="third odd">
                    <form action="/logout" method="post">
                    @csrf
                        <input type="submit" value="logout">
                    </form>
                </li>
            </ul>
        </nav>
    @endauth


@yield('content')
<footer>
    <p>copyright &copy; 2024</p>
</footer>
</body>
</html>
