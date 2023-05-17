@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_zone')

    <div class="container">
        <div class="row">


            <div class="col col-sm-6">
                <div class="card" style="background-color:lightblue;">

                    <div class="card-header">zone List</div>

                    <div class="card-body">
                        @foreach($zones as $zone)
                            <li><span style="color:gray;">ID:</span><a
                                        href="{{ route('/EQemu/zone/zone_show', $zone->zoneidnumber) }}">
                                    {!! ucwords($zone['zoneidnumber']) !!}</span> - {{$zone->long_name}}</a><br>


                            </li>
                            <hr>
                        @endforeach

                    </div>

                </div>
            </div>


        </div>
    </div>
    </div>
@endsection