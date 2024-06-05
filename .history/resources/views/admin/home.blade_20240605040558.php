@extends('layout.nav')

@section('title')
Heros | admin
@endsection

@section('content')
@if (session('successRole'))
        <div style="height:40px;color:black;background-image: linear-gradient(to right,#DF63FF,#82E9EF);display: flex;align-items: center;justify-content: center;">
        {{ session('successRole')  }}
        </div>
        {!! '<br><br>' !!}
    @endif
@endsection
