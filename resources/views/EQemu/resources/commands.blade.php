@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_character')

@foreach($command as $command)
    <p>{{$command->command}} | {{$command->description}}</p> <hr>
    @endforeach

@endsection