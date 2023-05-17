@extends('nasa.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/NASA Apod
        </div>
    </header>
    <div class="container-sm">


        <div class="row" style="margin:0 20px 2px 20px;">



            <div class="col-sm-10" style="margin:0 0 20px 0;">
                <div class="card h-100 text-white bg-dark ">
                <div class="card-header">
                <h3>{{$results->title}} - @if(isset($results->copyright)){{$results->copyright}} @endif - {{$results->date}} - Media Type: {{$results->media_type}}</h3>

                    </div>
                <div class="card-body"
                     style="">

<div >
                <img src="{{$results->hdurl}}" alt="{{$results->title}}" width="1400" style="display: block; margin-left: auto; margin-right: auto;">
</div>
                    <div class="card-text">
                    <p>{{$results->explanation}}</p>
                    </div>
                <h3></h3>
                    <h3><a href="{{$results->hdurl}}">HD image url</a></h3>
                <h3><a href="{{$results->url}}">image url</a></h3>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection







