@auth

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href={{ asset('/assets/images/favicon.ico') }} type="image/x-icon">
    <link rel="stylesheet" href={{ asset('assets/css/nav.css') }}>
    @yield('css')
    @yield('script')
</head>
<body>
    <nav>
        <ul class="nav-ul">
            <li class="first"><a href="{{ @switch(auth()->user()->role)
            @case('admin')
                r
                @break
        
            @case('hero')
                <li><a class="third even" href="{{ route('news.create') }}">Create New News</a></li>
                @break

            @case('user')
                @break
        
            @default
                
            @endswitch }}"><img src="{{  asset('/assets/images/nav.png') }}" alt="" /></a></li>
            <li class="second"><span>Welcome </span><a class="second odd" href="#">{{auth()->user()->firstName . ' ' . auth()->user()->lastName }}</a></li>
            <form class="d-flex" role="search">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="nav-btn btn-outline-success" type="submit">Search</button>
            </form>
            <li><a class="third even" href="{{ route('support') }}">Support</a></li>
            <li><a class="third odd" href="{{ route('news.index') }}">News</a></li>

        @switch(auth()->user()->role)
            @case('admin')
                <li><a class="third even" href="{{ route('news.create') }}">Create New News</a></li>
                @break
        
            @case('hero')
                <li><a class="third even" href="{{ route('news.create') }}">Create New News</a></li>
                @break

            @case('user')
                @break
        
            @default
                
            @endswitch

            {{-- @section('admin-nav')
                <li><a class="third even" href="{{ route('news.create') }}">Create New News</a></li>
            @show --}}
            <li><a class="third even" href="#">Information</a></li>
            <li><a class="third odd" href="#">Culture</a></li>
            <li><a class="third even" href="#">Content</a></li>
            <li><a class="third odd" href="{{ route('about') }}">About</a></li>
            <li class="third">
                <form action="/logout" method="post">
                @csrf
                    <button class="third even" type="submit">Log out</button>
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

@endauth
