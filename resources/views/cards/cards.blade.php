@extends('cards.layouts.app')

@section('content')
    @foreach($cards as $card)

@if($card->rights=="The Merrick Mint")

<div class="card" style="width: 30rem;">
    <img class="card-img-top" src="{{ asset("/card_resources/assets/img/".$card->Set."/".$card->fname.".jpg")}}" alt="Card image cap">

    <div class="card-body">
        <h5 class="card-title">{{$card->Title}}</h5>
        {{--<p class="card-text">{{$card->Description}}</p>--}}
        {{$card->subject}}<br><a type="button" class="btn btn-xs cust-btn-prim"
                                 href="{{$card->sub}}"
                                 target="_blank">Video</a><br>{{$card->Year}}<br>res x:{{$card->res_x}} res y:{{$card->res_y}} ratio:{{$card->ratio}} view:{{$card->view}}<br>{{$card->rights}}<br>{{$card->filesize}}
        {{--<a href="#" class="btn btn-primary">Back Side</a> --}}
    </div>
</div>
@endif
    @endforeach
@endsection