@extends('maps.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Maps
        </div>
    </header>

    <div class="container-sm">
        <div class="row" style="margin:0 20px 0 20px;">
            <div class="col-sm-3">
                <div class="card ">
                    <div class="card-header"><h3 style="color:white;">Maps Open Data</h3></div>
                    <div class="card-body">
                        <embed src="{{asset("/maps/crime")}}"width="150%" height="150%"></embed>
                        @foreach($maps as $map)

                        <a class= "btn border-success text-dark" href="{{$map->route}}">
                            <h3>{{$map->link}}</h3></a>




                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
