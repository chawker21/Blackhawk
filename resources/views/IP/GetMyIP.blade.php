@extends('app.layouts.app')

@section('content')
<ul class="list-group">
    <li class="list-group-item">Your IP Information</li>
    <li class="list-group-item list-group-item-primary">Your Ip address is: <span style="margin-left:50px;">{{$Geo->ip}}</span></li>
    <li class="list-group-item list-group-item-primary">Your Country is: <span style="margin-left:50px;">{{$Geo->country}} | {{$Geo->countryabbr}}</span></li>
    <li class="list-group-item list-group-item-primary">Your State is: <span style="margin-left:50px;">{{$Geo->state}} | {{$Geo->stateabbr}}</span></li>
    <li class="list-group-item list-group-item-primary">Your City is: <span style="margin-left:50px;">{{$Geo->city}}</span></li>
    <li class="list-group-item list-group-item-primary">Your Zipcode is: <span style="margin-left:50px;">{{$Geo->zip}}</span></li>
    <li class="list-group-item list-group-item-primary">Your Latitude is: <span style="margin-left:50px;">{{$Geo->lat}}</span></li>
    <li class="list-group-item list-group-item-primary">Your Longitude is: <span style="margin-left:50px;">{{$Geo->lon}}</span></li>
</ul>

<div style="width: 500px; height: 500px;">
    {!! Mapper::render() !!}
</div>
@endsection