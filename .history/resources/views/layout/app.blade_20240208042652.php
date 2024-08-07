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
    <header>
        <nav>
        <ul class="nav-ul">
                <li class="first"><a href="/"><img src="{{  asset('img/nav.png') }}" alt="" /></a></li>
                <li class="second"><a href="#">Information</a></li>
                <li class="second"><a href="about">About</a></li>
                <li class="second"><a href="#">Culture</a></li>
                <li class="second"><a href="#">Content</a></li>
                <li class="second"><a href="/login">Log out</a></li>
            </ul>
        </nav>

    </header>
@yield('content')
<footer>
    <p>copyright &copy; 2024</p>
</footer>
</body>
</html>
