<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>@yield('title')</title>
<link rel="icon" href={{ asset() }} type="image/png">
<link rel="stylesheet" href={{ asset('css/style.css') }}>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="first"><img src="{{  asset('img/nav.png') }}" alt="" /></li>
                <li class="second"><a href="/">Home</a></li>
                <li class="second"><a href="#">Information</a></li>
                <li class="second"><a href="about">About</a></li>
                <li class="second"><a href="#">Culture</a></li>
                <li class="second"><a href="#">Content</a></li>
                <li class="second"><a href="login">Log out</a></li>
            </ul>
        </nav>

    </header>
@yield('content')
<footer>
    <p>copyright &copy; 2024</p>
</footer>
</body>
</html>
