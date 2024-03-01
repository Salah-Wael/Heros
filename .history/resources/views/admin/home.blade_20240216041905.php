@extends('layout.nav')
@section('title')
Heros | admin
@endsection
@section('content')
@section('admin-nav')
    <nav>
        <ul class="nav-ul">
            <form class="d-flex" role="search">
            @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="nav-btn btn-outline-success" type="submit">Search</button>
            </form>
            <li class="third odd"><a href="{{ route('news.create') }}">Create News</a></li>
            <li class="third even"><a href="about">About</a></li>
            <li class="third odd"><a href="#">Culture</a></li>
            <li class="third even"><a href="support">Support</a></li>
            <li class="third even"><a href="#">Content</a></li>
        </ul>
    </nav>
@

@endsection
