@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_zone')
    {!! Form::model($zone, ['route' => ['/EQemu/zone/zone_update', $zone->zoneidnumber]])  !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @csrf
    <div class="card-group">
        <div class="card cardshadow text-white bg-dark mb-3" style="max-width: 30rem; margin-left:15px;">
            <div class="card-header " style="font-size:22px; color: #5075e3 ">{{$zone->long_name}}</div>
            <div class="card-body">
                <h4 class="card-title" style="color:orange;">log out of game and back in to update<br>
                    <hr>
                    Safe Location:
                    x: {{$zone->safe_x}} y:{{$zone->safe_y}} z:{{$zone->safe_z}}
                    <hr>
                    Zone locations:<br>
                    @foreach($zoneins as $zonein)
                        target zone id: {{$zonein->target_zone_id}} x: {{$zonein->target_x}} y: {{$zonein->target_y}}
                        z: {{$zonein->target_z}}<br>
                    @endforeach

                    Mininum Level:
                    {{ Form::text('min_level', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    Mininum Status:
                    {{ Form::text('min_level', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                </h4>
            </div>
        </div>


        {{ Form::submit ('update', ['class' => 'btn btn-success  btn-xs']) }}
        {!! Form::close() !!}
    </div>
    </div>
@endsection