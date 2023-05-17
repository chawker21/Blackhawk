@extends('coinbase.layouts.app')


@section('title', '| Coinbase Trade Average Trend')

@section('content')
    <body>
    <div id="heartbeat"></div>

    <div class="card col-md-12" >
        <img src="..." class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title" style="font-size:24px; color:purple;">Heartbeat data</h5>

            <table>
                <tbody>
                <tr>
                    {{--<th style="width:200px;">Type</th>--}}
                    {{--<th style="width:200px;">Sequence</th>--}}
                    <th style="width:200px;">Product id</th>
                    <th style="width:200px;">Price</th>
                    <th style="width:200px;">open 24 hr</th>
                    <th style="width:200px;">volume 24 hr</th>
                    <th style="width:200px;">low 24 hr</th>
                    <th style="width:200px;">high 24 hr</th>
                    <th style="width:200px;">volume 30d</th>
                    <th style="width:200px;">Best Bid</th>
                    <th style="width:200px;">Best Ask</th>
                    <th style="width:200px;">Side</th>
                    <th style="width:400px;">Time</th>

                    <th style="width:200px;">Trade id</th>
                    <th style="width:200px;">Last Size</th>
                </tr>

            <tr>
            {{--<td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->type}}</td>--}}
            {{--<td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->sequence}}</td>--}}
            <td class="card-text" style="font-size:24px; color:cornflowerblue;" style="font-size:24px; color:cornflowerblue;">{{$websocket->product_id}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->price}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->open_24h}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{rtrim($websocket->volume_24h, ".0")}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->low_24h}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->high_24h}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{rtrim($websocket->volume_30d, ".0")}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->best_bid}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->best_ask}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->side}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{rtrim($websocket->time, "Z")}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->trade_id}}</td>
            <td class="card-text" style="font-size:24px; color:cornflowerblue;">{{$websocket->last_size}}</td>
            </tr>

                </tbody>
            </table>


        </div>
    </div>


    </body>
@endsection