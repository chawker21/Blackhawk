@extends('guides.layouts.app')

@section('content')
<button class="btn btn-block bg-primary text-warning" style="margin: 0 0 10px 0; font-size:40px; font-weight:bold;">Guides</button>
    @include('guides.partials._profile')
    <div class="container-sm">
        <div class="row">
            @foreach($guide as $guide)
                <div class="col-sm-8">
                    <div class="card text-white bg-dark border-success"
                         style="margin:0px 0px 10px 0px; transform: translateX(30%);">
                        <h5 class="card-header bg-secondary border-success"
                            style="width: 100%; text-align:left;">{{$guide->keywords}}</h5>
                        <div class="card-body">
                            <p class="card-text text-success" style="font-size:20px;">{{$guide->body}}</p>
                        </div>
                        <div class="card-footer"><a href="{{$guide->link}}" class="btn btn-secondary border-success"
                                                    style="width: 100%; ">{{$guide->title}}</a></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
