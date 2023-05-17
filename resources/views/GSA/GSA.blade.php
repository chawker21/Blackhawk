@extends('layouts.app')

@section('content')
    <h5 class="card-header"><a href="/GSA/GSA_Data_Center">download new list</a><center><h3>Current Government Auctions</h3></center></h5>
    <hr>
    @foreach($gsa as $gsa)
        <div class="container">

            <div class="card">
                <h5 class="card-header">{{$gsa->ItemName}}</h5>
                <div class="card-body">
                    <h5 class="card-title">{{$gsa->PropertyState}}</h5>
<p>HighBid: {{$gsa->HighBidAmount}}</p>
                    <p>Increments by: {{$gsa->AucIncrement}}</p>
<p>Reserve: {{$gsa->Reserve}}</p>

                    <a href="{{$gsa->ItemDescURL}}">     <img src="{{$gsa->ImageURL}}" height="200" width=auto></a>

                </div>
            </div>

        </div>
    @endforeach

@endsection