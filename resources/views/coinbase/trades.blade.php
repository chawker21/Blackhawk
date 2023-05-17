@extends('coinbase.layouts.app')


@section('title', '| Coinbase Trade Average Trend')

@section('content')
    <body>
    <div id="heartbeat"></div>
    {{$websocket->price}}{{$websocket->best_bid}}
    <h1 style="color:gold">Coinbase Trades</h1>
    <h1 style="color:gold">{{$XLMposition->balance}}</h1>
    <img src="\coinbase_resources\img\coinbasehistorical2weekplot.png">
    <div class="card" style="width: 26rem;">
        <h5 class="card-title">Shows Overall trade totals, averages, and sums of the last 100 trades for XLM
            (Steller) coin</h5>
        <img src="\coinbase_resources\img\Stellar_Symbol.png" class="card-img-top" alt="...">
        <h5 class="card-title">{{trim($stockname->name, "https://api.gdax.com/products/ /book?level=2")}}</h5>
        <div class="card-body">

            <h5 class="card-title" style="font-size:24px; color:purple;">Last 100 trade totals</h5>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Buy Total: {{$tradebuysum}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Total: {{$tradesellsum}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Overall Average: {{$overallavg}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">overall Total: {{$overallsum}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">price Average: {{$tradepriceavg}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Buy Average: {{$tradebuyavg}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Average: {{$tradesellavg}}</p>
        </div>
    </div>
    <div class="card" style="width: 26rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-size:24px; color:purple;">Last 33 trade totals</h5>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;" style="font-size:24px; color:cornflowerblue;">Buy Total: {{$tradebuysum1}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Total: {{$tradesellsum1}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Overall Total: {{$overallsum1}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Buy Average: {{$tradebuyavg1}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Average: {{$tradesellavg1}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Overall Avg {{$overallavg1}}</p>
        </div>
    </div>
    <div class="card" style="width: 26rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-size:24px; color:purple;">Last 34-66 trade totals</h5>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;" style="font-size:24px; color:cornflowerblue;">Buy Total: {{$tradebuysum2}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Buy Average: {{$tradebuyavg2}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Total: {{$tradesellsum2}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Average: {{$tradesellavg2}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Overall Total: {{$overallsum2}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Overall Avg {{$overallavg2}}</p>
        </div>
    </div>
    <div class="card" style="width: 26rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-size:24px; color:purple;">Last 67-100 trade totals</h5>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;" style="font-size:24px; color:cornflowerblue;">Buy Total: {{$tradebuysum3}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Total: {{$tradesellsum3}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Buy Average: {{$tradebuyavg3}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Sell Average: {{$tradesellavg3}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Overall Total: {{$overallsum3}}</p>
            <p class="card-text" style="font-size:24px; color:cornflowerblue;">Overall Avg {{$overallavg3}}</p>
        </div>
    </div>
    <div class="card" style="width: 36rem;">
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <p class="card-text">First trade: {{$coinbasetradefirst}}</p>
            <p class="card-text">Last trade: {{$coinbasetradelast}}</p>
        </div>
        <button href="{{ route('addnewtradedata') }}" type="button" class="btn btn-default">Update</button>
    </div>
    <div class="card" style="width: 26rem;">
        <h5 class="card-title"></h5>
        <img src="..." class="card-img-top" alt="...">
        <h5 class="card-title"></h5>
        <div class="card-body">
            @foreach($currencies as $currency)
                <p>{{$currency->code}} -
                    {{$currency->name}}</p>
                @endforeach
        </div>
    </div>
    </body>
@endsection




