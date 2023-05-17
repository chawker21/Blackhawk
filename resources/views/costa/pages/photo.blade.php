@extends('costa.layouts.page')
@section('content')
<header>
    <div class="content">

        <div class="title m-b-md">

            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Costa Rica
        </div>

        {{--@include('partials.aside')--}}

        <div class="links">
            @foreach($costas as $costa)
<hr>
                <iframe width="50%" height="600"
                        allowfullscreen
                        frameborder="0"
                        src="../googlevr-gh-pages/index.html?image=img/{!! $costa->title !!}.jpg&is_stereo={!! $costa->is_stereo !!}">

                </iframe>

<hr>
                <div class="justify-content-center pagination pagination-centered">
            @if(!isset($linksShown))
                    {{ $costas->links() }}
                @endif
            @endforeach
                </div>
        </div>

    </div>
</header>
@endsection