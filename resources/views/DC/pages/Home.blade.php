@extends('DC.layouts.home')




@section('content')

<header>
    @include('DC.navbars._nav')
    <div class="hero-text-box">
        <img src="/DC_resources/assets/img/logo4.jpg" class="logo3"><h1 class="h1header">Welcome to My page on Washington D.C.<br> I hope you like It</h1>
        <a class="btn btn-full" href="index">Home</a>
        <a class="btn btn-ghost" href="index">About</a>

    </div>
</header>
@stop