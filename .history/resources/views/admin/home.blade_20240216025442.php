@extends('layout.nav')
@section('title')
Heros | admin
@endsection
@section('content')
<nav>
        <ul class="nav-ul">
                <li class="first"><a href="/"><img src="{{  asset('/assets/images/nav.png') }}" alt="" /></a></li>
                <li class="second"><a href="#">{{'Welcome ' . auth()->user()->firstName . ' ' . auth()->user()->lastName }}</a></li>
                <form class="d-flex" role="search">
                @csrf
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="nav-btn btn-outline-success" type="submit">Search</button>
                </form>
                <li class="third odd"><a href="#">Create N</a></li>
                <li class="third even"><a href="about">About</a></li>
                <li class="third odd"><a href="#">Culture</a></li>
                <li class="third even"><a href="support">Support</a></li>
                <li class="third odd"><a href="news">NEWS</a></li>
                <li class="third even"><a href="#">Content</a></li>
                <li class="third odd">

                </li>
            </ul>
        </nav>
@endsection
