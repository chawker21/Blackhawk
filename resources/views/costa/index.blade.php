@extends('costa.layouts.app')
@section('content')
<header>
        <div class="content">

            {{--<div class="title m-b-md">--}}

                {{--<a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Costa Rica--}}
            {{--</div>--}}

                {{--@include('partials.aside')--}}

            <div class="links">
                @foreach($costas as $costa)

                    <a href="/costa/{{$costa->title}}"><h2>{{$costa->title}}</h2></a>

                @endforeach

            </div>

        </div>
</header>
@endsection

