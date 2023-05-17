@extends('presidents.layouts.app')


@section('title', '| Photo Index')

@section('content')
    <body>



    <div>
        <h1 style="color:cornflowerblue; margin-bottom:40px;">{{$president->president}}</h1>



                    <img class="img-rounded main-page-img" src="/presidents_resources/img/{{$president->president}}.png"  alt="">






    </div>
    </body>
@endsection