@extends('auctions.layouts.app')

@section('content')
    <div class=" alert alert-success border border-dark" style="font-weight:bold">

        <a class="btn" href="/auctions/update"><h3>update auctions</h3></a><br>


    </div>
                @foreach($auctions as $auction)
                    <div class=" alert alert-success border border-dark" style="font-weight:bold">
                        <p style="font-size:20px;">{{$auction->Description}} | {{$auction->Location}} | {{$auction->End}} | {{$auction->Bid}}</p>
                        <a href="{{$auction->main}}">GoTo auction</a>
                        <img src="{{$auction->images}}">

                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection