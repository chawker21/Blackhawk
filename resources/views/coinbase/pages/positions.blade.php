@extends('coinbase.layouts.app')


@section('title', '| Coinbase positions')

@section('content')
    <p>coinbase positions</p>
    @foreach( $positions as $position)
        <p>{!! $position->id !!}</p><p>{{$position->name}}{{$position->currency}}{{$position->type}}</p>

    @endforeach

@endsection
