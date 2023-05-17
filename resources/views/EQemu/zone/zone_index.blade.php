@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_zone')


    @foreach($zones as $zone)

        <div class="container">

            <div class="card">

                <div class="card-body">


                    {{$zone->zoneidnumber}}<span style="margin-left:20px;"><a
                                href="{{ route('/EQemu/zone/zone_show', $zone->zoneidnumber) }}"> {!! ucwords($zone['long_name']) !!}</a></span>


                </div>
            </div>

        </div>
    @endforeach
    {{ $zones->links() }}
@endsection