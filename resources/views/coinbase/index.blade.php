@extends('coinbase.layouts.appindex')

@section('title', '| Coinbase index')

@section('content')
    <div style="display: flex; justify-content: center;">
        <form action="{{route('coinbase/trades')}}" method="POST">
            @csrf
            <input type="hidden" name ="arg1" value="BTC">
            <input type="submit" value="Send BTC.">
        </form>
        <form action="{{route('coinbase/trades')}}" method="POST">
            @csrf
            <input type="hidden" name ="arg1" value="ACH">
            <input type="submit" value="Send ACH.">
        </form>
    </div>
    <p>coinbase index</p>
    @foreach( $links as $link)
        <p>{{$link->link}}</p>

        <a href="{{$link->route}}">{{$link->link}}</a>
    @endforeach

@endsection
