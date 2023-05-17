@extends('layouts.app_yt')


@section('title', '| Yt')

@section('content')
    {{--<pre>{{   (json_encode($process)[])}}</pre>--}}


{{$res}}

{{--<div class="container">--}}
      {{--<div class="col-sm-12" style="margin-left:50px;"> {{ $tstr  }}</div>--}}

{{--</div>--}}


    <div class="container">
        {{$result->videoTitle}}<br>
        {{$result->description}}<br>
<a href="https://youtu.be{{$result->video_id}}?start={{$start}}">link</a>
 {!! html_entity_decode($result->iframe)!!}<br>






    </div>

@endsection