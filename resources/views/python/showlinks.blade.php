@extends('python.layouts.app')
@section('content')
    <header>
     @foreach($links as $link)
         <a href="{{$link->link}}">{{$link->link}}</a><hr/>
         @endforeach
    </header>
@endsection