@extends('home')

@section('title')
Heros | admin
@endsection

@section('admin-nav')
    @parent
@endsection

@section('content')
@if (session('success'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('success')  }}
        </div>
        {!! '<br><br>' !!}
    @endif
@endsection
