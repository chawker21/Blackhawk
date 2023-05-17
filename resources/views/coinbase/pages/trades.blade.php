@extends('coinbase.layouts.app')


@section('title', '| Coinbase positions')

@section('content')
    <!-- Menu -->
    <div class="container-sm">
        <div class="row" style="margin:5px 0px 10px 200px;">
            <div class="col-sm-12">
                <img src="{{asset("/coinbase_resources/img/coins1.jpg") }}" style="width:711px;height:57px;">
                <img src="{{asset("/coinbase_resources/img/coins2.jpg") }}" style="width:711px;height:57px;">
                <img src="{{asset("/coinbase_resources/img/coins3.jpg") }}" style="width:711px;height:57px;">
            </div>
        </div>
        <div class="row" style="margin:0px 0px 0px 10px;">
            @foreach($product as $product)
                <form action="{{route('coinbase/trades')}}" method="POST">
                    @csrf
                    <input class="bg-primary" type="hidden" name="arg1" value={{$product->base_currency}}>
                    <input class="btn btn-lg btn-warning" style="width: 120px; margin:0px 0px 0px 10px;"
                           type="submit"
                           value="{{$product->base_currency}}-{{$product->quote_currency}}">
                </form>
            @endforeach
        </div>
        <div class="row" style="margin:0px 0px 10px 200px;">
            <div class="col-sm-12">
                <img src="{{asset("/coinbase_resources/img/coins1.jpg") }}" style="width:711px;height:57px;">
                <img src="{{asset("/coinbase_resources/img/coins2.jpg") }}" style="width:711px;height:57px;">
                <img src="{{asset("/coinbase_resources/img/coins3.jpg") }}" style="width:711px;height:57px;">
            </div>
        </div>
    </div>
    <div class="container-sm">
        <button type="button" class="btn btn-success btn-block bg-danger"
                style="font-size:50px; font-weight:bold; color:cornsilk;">Last 1000 Trades for: {{$arg1}}
            -{{$product->quote_currency}}</button>
        <button type="button" class="btn btn-success btn-block bg-success"
                style="width:60%;  transform: translateX(30%); font-size:20px; font-weight:bold;">
            <span style="color:#191970">Buy Side : </span><span style="color:#B0E0E6">{{$buys->count()}}</span>
            <span style="color:#191970"> Sell Side : </span>
            <span style="color:#B0E0E6">{{$sells->count()}}</span></button>

        <button type="button" class="btn btn-primary btn-block"
                style="margin-top: 10px; width: 60%;  transform: translateX(30%); font-size:20px; font-weight:bold;"><span
                style="color:#191970">Buy Volume
            : </span><span style="color:#B0E0E6">{{$buys->sum('size')}}</span><span style="color:#191970"> Sell Volume
            : </span><span style="color:#B0E0E6">{{$sells->sum('size')}}</span></button>
        <table class="columns" style="margin-top:10px; width: 100%;  transform: translateX(30%);">
            <tr class="btn btn-primary">
                <td>
                    <div
                        id="count_3d"></div>
                </td>
                <td>
                    <div style=""
                         id="volume_3d"></div>
                </td>
            </tr>
        </table>
    </div>
    <div class="container-sm">
        <button type="button"
                class="btn btn-success btn-block @if($trades->first()->side == 'sell')bg-primary @else bg-success @endif "
                style="width: 60%; transform: translateX(30%); font-size:20px; font-weight:bold; margin:10px 0px 0px 0px;"><span
                style="color:#191970">Last Trade : </span><span style="color:#B0E0E6">{{$ticker}}</span>
        </button>
        <button type="button"
                class="btn btn-success btn-block @if($trades->last()->side == 'sell')bg-primary @else bg-success @endif "
                style="width: 60%; transform: translateX(30%); font-size:20px; font-weight:bold; margin:10px 0px 10px 0px;"><span
                style="color:#191970">24 Hour Stats : </span><span style="color:#B0E0E6">{{$stats}}</span>
        </button>
    </div>
    <div class="container-sm">
    <div class="row">
        @foreach( $trades as $trade)
            <div class="col-sm-1" style="margin:10px 0px 10px 0px;">
                <div class="card text-white @if($trade->side == 'sell')bg-primary @else bg-success @endif ">
                    <div class="card-header">{!! $trade->time!!}</div>
                    <div class="card-body">
                        <h5 class="card-title">{{$trade->side}}: {!! $trade->trade_id!!}</h5>
                        <p class="card-text">Size: {{$trade->size}}</p>
                        <p class="card-text">Price: {{$trade->price}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    </div>
@endsection
