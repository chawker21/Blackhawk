@extends('presidents.layouts.app')


@section('title', '| Photo Index')

@section('content')



<div class="container col-md-12">
    <div class="row">
    <div class="col-md-6">
        @foreach($presidents as $president)
        <h1 style="color:cornflowerblue; margin-bottom:40px;">{{$president->president}} {{$president->years}}</h1>



        <img class="img-rounded main-page-img" src="/presidents_resources/img/{{$president->president}}.png" height="900" alt="">
    </div>
    <div class="col-md-6">
        <h1 style="color:cornflowerblue; margin-bottom:40px;">{{$president->vice}}</h1>
        <img class="img-rounded main-page-img" src="/presidents_resources/img/{{$president->vice}}.png" height="900" alt="">
@endforeach
    </div>
    </div>
</div>

@endsection
