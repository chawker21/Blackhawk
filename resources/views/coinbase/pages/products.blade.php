@extends('coinbase.layouts.app')


@section('title', '| Coinbase positions')

@section('content')
    <p>coinbase products</p>
    <div class="row">

    @foreach( $products as $product)
            <div class="col-sm-3">

                <div class="card text-white bg-primary ">
                    <div class="card-header">{!! $product->base_currency!!}</div>
                    <div class="card-body">
                        <h5 class="card-title">{!! $product->base_currency!!}-{!! $product->quote_currency!!}</h5>
                        <p class="card-text">Base Min Size: {!! $product->base_min_size!!}</p>
                        <p class="card-text">Base Max Size: {!! $product->base_max_size!!}</p>
                        <p class="card-text">Quote Increment: {!! $product->quote_increment!!}</p>
                        <p class="card-text">Base Increment: {!! $product->base_increment!!}</p>
                        <p class="card-text">Display Name: {!! $product->display_name!!}</p>
                        <p class="card-text">Minimum Market Funds: {!! $product->min_market_funds!!}</p>
                        <p class="card-text">Maximum Market Funds: {!! $product->max_market_funds!!}</p>
                        <p class="card-text">Limit Only: {!! $product->limit_only!!}</p>
                        <p class="card-text">Status: {!! $product->status!!}</p>
                    </div>
                </div>

            </div>

    @endforeach
    </div>
@endsection
