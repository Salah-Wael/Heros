@extends('layout.nav')
@section('title')
Heros | home
@endsection
@section('css')
<link rel="stylesheet" href="{{ asset('/assets/css/home.css') }}">
@endsection

@section('content')
    <div class="content1">

        <h3>LET'S</h3>
        <br>
        <h1>planning your<br>own travel </h1>
        <br>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        <br>Voluptate debitis dignissimos veritatis hic assumenda estu</p>
        <br>
        <button class="btn">book a trip</button>
    </div>
    <div class="tours">
    <div >
        <img class="nap1" src="img/nap1.jpg" alt="ski tours">
        <p>ski tours</p>
    </div>
    <div>
        <img src={{ asset("/assets/images/home/nap2.jpg") }} alt="ski tours">
        <p>ski tours</p>
    </div>
    <div>
        <img src={{  }}"/assets/images/home/nap3.jpg" alt="ski tours">
        <p>ski tours</p>
    </div>
    <div>
        <img src="/assets/images/home/nap4.jpg" alt="ski tours">
        <p>ski tours</p>
    </div>
    <div>
        <img src={{ asset("/assets/images/home/nap5.jpg") }} alt="ski tours">
        <p>ski tours</p>
    </div>
    </div>
    <div class="content2">
        <img src={{ asset("/assets/images/home/h1.png") }} alt="mountain">
    <div>
        <h3>EAT NUSA TENGGA</h3>
        <br>
        <h2>have uou enjoyed your holiday</h2>
        <br>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. 1110 inventore accusamus, explicabo impedit laboriosam vero
        <br> autem recusandae illum quo. Beatae ipsa inventore aliquid ipsum officia.</p>
        <br>
        <button class="btn">Read more</button>
    </div>
    </div>
    <div class="content3">
    <div class="t1 background-img">
        <p>East Java</p>
        <p class="p">mont boro</p>
    </div>
    <div class="t2 background-img">
        <p>East Java</p>
        <p class="p">mont boro</p>
    </div>
    <div class="t3 background-img">
        <p>East Java</p>
        <p class="p">mont boro</p>
    </div>
    </div>

    <center><button class="btn">See Tours</button></center>
@endsection
