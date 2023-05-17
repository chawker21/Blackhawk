@extends('intel.layouts.app')
@section('content')
    <div class="content">
        <img src="/app_resources/assets/img/logo/C21_Logo.png">
        <div class="title m-b-md">

            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Intel
        </div>

        <div class="links">
            @foreach($intel as $intel)

                <h3>{{$intel->title}}</h3>
                <audio src="/intel_resources/audio/{{$intel->title}}" controls
                       preload="none"></audio>



            @endforeach
        </div>
    </div>

@endsection
