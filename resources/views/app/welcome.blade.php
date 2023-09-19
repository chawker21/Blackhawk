@extends('app.layouts.app')

@section('content')
    <header class="d-flex justify-content-center align-items-center vh-100"> <!-- Using Flexbox utilities to center content -->
        <!-- Main content container -->
        <div class="content text-center">

            <!-- Logo Image -->
            <img src="{{ asset('app_resources/assets/img/logo/C21_Logo.png') }}" alt="Chawker21 Logo" class="mb-4">



            <!-- Hover effects (if any) -->
            @include('app.partials._sdhover')

            <!-- Links section in a card -->
            <div class="card card-links text-white"> <!-- max-width for better control -->
                <div class="card-header">
                    <!-- Title container -->

                        <p class="title mb-4">Chawker21.blue</p>

                </div> <!-- Card header -->
                <div class="card-body card-content">
                    <div class="row"> <!-- Start of the Bootstrap row -->
                        @foreach($links as $link)
                            @include('app.partials._randomcolor')

                            <!-- Each link button will occupy 1/5 of the row using Bootstrap's col-md-2.5 -->
                            <div class="col-md-2.4 mb-3"> <!-- Added mb-3 for spacing between buttons -->
                                <!-- Conditionally rendering the link or modal -->
                                @if($link->id == 4)
                                    @include('app.modals.costa_modal')
                                @else
                                    <a
                                            onmouseover="setRandomColor{!! $link->id !!}()"
                                            class="btn btn-color btn-block"
                                            id="colorpad{{$link->id}}"
                                    href="{{$link->route}}">
                                    {{$link->link}}
                                    </a>
                                @endif
                            </div>

                            <!-- Close the current row and start a new one after every 5th link -->
                            @if ($loop->iteration % 5 == 0 && !$loop->last)
                    </div>
                    <div class="row">
                        @endif

                        @endforeach
                    </div> <!-- End of the Bootstrap row -->
                </div>
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





