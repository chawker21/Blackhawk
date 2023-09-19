@extends('costa.layouts.app')

@section('content')
    <header>
        <!-- Header Content Container -->
        <div class="content container">

            <!-- Uncomment below if you want to show the title in the future
            <div class="title m-b-md">
                <a class="text-decoration-none text-dark" href="/">Chawker21.blue</a>/Costa Rica
            </div>
            -->

            <!-- Optional: Include aside partial for sidebar or additional info
            @include('partials.aside')
            -->

            <!-- List of Links for Costa Titles -->
            <div class="links row">
                @foreach($costas as $costa)
                    <!-- Each Costa Title as a Column. Adjust the "col-md-4" class as per requirements. -->
                    <div class="col-md-4 mb-4">
                        <a class="text-decoration-none" href="/costa/{{$costa->title}}">
                            <h2 class="text-center">{{$costa->title}}</h2>
                        </a>
                    </div>
                @endforeach
            </div>

        </div>
    </header>
@endsection


