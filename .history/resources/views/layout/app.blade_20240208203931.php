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

        <nav>
        <ul class="nav-ul">
                <li class="first"><a href="/"><img src="{{  asset('img/nav.png') }}" alt="" /></a></li>
                <form class="d-flex" role="search">
                @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <li class="second odd"><a href="#">Information</a></li>
                <li class="second even"><a href="about">About</a></li>
                <li class="second odd"><a href="#">Culture</a></li>
                <li class="second even"><a href="#">Content</a></li>
                <li class="second odd">
                    <form action="/logout" method="post">
                    @csrf
                        input:
                    </form>
                </li>
            </ul>
        </nav>


@yield('content')
<footer>
    <p>copyright &copy; 2024</p>
</footer>
</body>
</html>
