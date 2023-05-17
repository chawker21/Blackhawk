@extends('cspan.layouts.app')

@section('content')

    <header>
        <div class="content">

            {{--<div class="title m-b-md">--}}

            {{--<a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Costa Rica--}}
            {{--</div>--}}

            {{--@include('partials.aside')--}}

            <div class="links">
                @foreach($cspan as $cspan)


                    <a class="col-md-4" style="float:left;" href="{{$cspan->link}}"><img src="{{$cspan->img}}"><h2>{{$cspan->description}}</h2></a>

                @endforeach

            </div>

        </div>
    </header>



@endsection