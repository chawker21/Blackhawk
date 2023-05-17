@extends('costa.layouts.app')
@section('content')
<header>
    <div class="content">

        <div class="title m-b-md">

            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Costa Rica
        </div>

        {{--@include('partials.aside')--}}

        <div class="links" style="margin-top:150px;">
            @foreach($costas as $costa)
<hr>
                <iframe width="40%" height="500px" allowfullscreen
                        frameborder="0" src="../googlevr-gh-pages/index.html?video=vid/{!! $costa->title !!}.mp4&is_stereo=true;"></iframe>

            @endforeach
<hr>
                <div class="justify-content-center pagination pagination-centered">
        {{ $costas->links() }}
    </div>
</header>
@endsection

