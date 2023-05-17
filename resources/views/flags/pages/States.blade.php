@extends('flags.layouts.appindex')


@section('title', '| Photo Index')

@section('content')
    <body>
    @include("flags.navbars.nav")


    <div>
        <h1 style="color:cornflowerblue; margin-bottom:40px;">Flags of the States</h1>
        @foreach($states as $state)
            <div class="container col-md-4">
                <div class="row">
                    <div class="col-md-6">
            {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="" onclick="click{{$state->title}}(this)" >--}}
                <a href=/flag_resources/img/stateflags/{{ strtolower($state->abbr)}}_flag.png >
                    <img class="img-rounded main-page-img" src="/flag_resources/img/stateflags/{{ strtolower($state->abbr)}}_flag.png"  alt="VM1">
                    <h3 class="list-group-item-heading itemheading">{{$state->full}} - State Flag</h3>
                    <h5 class="">capital: {{$state->capital}}</h5>
                    <h5 class="">established: {{$state->established}}</h5>
                    <h5 class="">Population: {{$state->population}}</h5>
                    <h5 class="">state_bird: {{$state->state_bird}}</h5>
                    <h5 class="">state_flower: {{$state->state_flower}}</h5>
                    <h5 class="">state_tree: {{$state->state_tree}}</h5>
                    <h5 class="">state_motto: {{$state->state_motto}}</h5>
                    <h5 class="">Population: {{$state->population}}</h5>
                    <h5 class="">electoral_votes: {{$state->electoral_votes}}</h5>
                </a>
                    </div>
                    <div class="col-md-6">
                <a href=/flag_resources/img/stateseals/{{ strtolower($state->abbr)}}_seal.png >
                    <img class="img-rounded main-page-img" src="/flag_resources/img/stateseals/{{ strtolower($state->abbr)}}_seal.png"  alt="VM1">
                    <h3 class="list-group-item-heading itemheading">{{$state->full}} - State Seal</h3>
                    <h5 class="">area_miles_squared: {{$state->area_miles_squared}}</h5>
                    <h5 class="">land_miles_squared: {{$state->land_miles_squared}}</h5>
                    <h5 class="">water_miles_squared: {{$state->water_miles_squared}}</h5>
                    <h5 class="">timezone: {{$state->timezone}}</h5>
                    <h5 class="">highest_peak: {{$state->highest_peak}}</h5>
                    <h5 class="">highest_elevation: {{$state->highest_elevation}}</h5>
                    <h5 class="">Border_states: {{$state->Border_states}}</h5>
                    <h5 class="">governor: {{$state->governor}}</h5>
                </a>


                    </div>
                </div>
                <hr style="border:3px solid gold;">
            </div>
        @endforeach



    </div>
    </body>
@endsection