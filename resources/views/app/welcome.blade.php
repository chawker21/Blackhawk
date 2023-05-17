@extends('app.layouts.app')
@section('content')
    <header>
            <div class="content">
                <img src="\app_resources\assets\img\logo\C21_Logo.png">


                <div class="title">
                    <p>Chawker21.blue</p>
                </div>
                @include('app.partials._sdhover')
                <div class="links">

                    @foreach($links as $link)
                      @include('app.partials._randomcolor')
                    @if($link->id==4)
                        @include('app.modals.costa_modal')
                        @else
                            <a onmouseover="setRandomColor{!! $link->id!!}()" class="btn btn-color" id="colorpad{{$link->id}}" href="{{$link->route}}">{{$link->link}}</a>
                        @endif
                    @endforeach
                    <br>
                </div>
            </div>
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            Echo.channel('home')
                .listen('newMessage', (e) => {
                    console.log(e.message);
                })
        </script>
    </header>
  @endsection