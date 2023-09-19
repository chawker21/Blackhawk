@extends('app.layouts.app')

@section('content')
    <header>
        <!-- Main content container -->
        <div class="content">

            <!-- Logo Image -->
            <img src="{{ asset('app_resources/assets/img/logo/C21_Logo.png') }}" alt="Chawker21 Logo">

            <!-- Title container -->
            <div class="title">
                <p>Chawker21.blue</p>
            </div>

            <!-- Hover effects (if any) -->
            @include('app.partials._sdhover')

            <!-- Links section -->
            <div class="links">
                @foreach($links as $link)
                    @include('app.partials._randomcolor')

                    <!-- Conditionally rendering the link or modal -->
                    @if($link->id == 4)
                        @include('app.modals.costa_modal')
                    @else
                        <a
                                onmouseover="setRandomColor{!! $link->id !!}()"
                                class="btn btn-color"
                                id="colorpad{{$link->id}}"
                                href="{{$link->route}}">
                            {{$link->link}}
                        </a>
                    @endif
                @endforeach
                <br>
            </div>
        </div>

        <!-- Scripts -->
        <script src="{{asset('js/app.js')}}"></script>
        <script>
            Echo.channel('home')
                .listen('newMessage', (e) => {
                    console.log(e.message);
                });
        </script>
    </header>
@endsection


