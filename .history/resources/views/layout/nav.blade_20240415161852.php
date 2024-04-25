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

                <li class="second"><span>Welcome </span><a class="second odd" href="">{{auth()->user()->firstName . ' ' . auth()->user()->lastName }}</a></li>
                <form class="d-flex" action="{{ route('news.index') }}" role="search">
                    @csrf
                    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
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

                <li><a class="third even" href="#">Search by photo</a></li>
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


    {{-- <footer class="iq-footer bg-white">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="{{ route('terms') }}">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 d-flex justify-content-end">
                    Copyright 2024 <a href="#">Heros</a> All Rights Reserved.
                </div>
            </div>
        </div>
    </footer> --}}
        <!-- footer -->
        <footer class="iq-footer bg-white">
        <div class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box about-widget">
                            <h2 class="widget-title">About us</h2>
                            <p>Ut enim ad minim veniam perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                doloremque laudantium, totam rem aperiam, eaque ipsa quae.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box get-in-touch">
                            <h2 class="widget-title">Get in Touch</h2>
                            <ul>
                                <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                                <li>support@fruitkha.com</li>
                                <li>+00 111 222 3333</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box pages">
                            <h2 class="widget-title">Pages</h2>
                            <ul>
                                <li><a href="index.html">Home</a></li>
                                <li><a href="about.html">About</a></li>
                                <li><a href="services.html">Shop</a></li>
                                <li><a href="news.html">News</a></li>
                                <li><a href="contact.html">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-box subscribe">
                            <h2 class="widget-title">Subscribe</h2>
                            <p>Subscribe to our mailing list to get the latest updates.</p>
                            <form action="index.html">
                                <input type="email" placeholder="Email">
                                <button type="submit"><i class="fas fa-paper-plane"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end footer -->

        <!-- copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, All Rights
                            Reserved.<br>
                            Distributed By - <a href="https://themewagon.com/">Themewagon</a>
                        </p>
                    </div>
                    <div class="col-lg-6 text-right col-md-12">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end copyright -->
    </footer>

        @livewireScripts
    @endauth
</body>
</html>
