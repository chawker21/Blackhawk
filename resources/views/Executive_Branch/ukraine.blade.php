@extends('Executive_Branch.layouts.app')
@section('content')
    <header>
        <div class="content">
            <div class="title m-b-md">
                <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/ukraine
            </div>
            @include('Executive_Branch.partials._sdhover')

            @foreach($ukraine as $ukraine)
                <h3 style="color:cornflowerblue;">{{$ukraine->title}}</h3>
            <p style="color:cornflowerblue;">{{$ukraine->description}}</p>
            @if ($ukraine->type == 'audio')
                <audio src="{{$ukraine->internal}}" controls
                preload="none"></audio><br>
                @elseif ($ukraine->type == 'pdf')
                    <iframe style="width: 50%; height: 820px"
                            src="{{$ukraine->internal}}"></iframe>
                @elseif ($ukraine->type == 'cspan')
                    <iframe width=512 height=330 src='https://www.c-span.org/video/standalone/{{$ukraine->internal}}' allowfullscreen='allowfullscreen' frameborder=0></iframe>

                @endif

            @endforeach

        </div>
    </header>
@endsection


