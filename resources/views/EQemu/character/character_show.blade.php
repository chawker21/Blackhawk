@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_character')
    {!! Form::model($character_data, ['route' => ['/EQemu/character/character_update', $character_data->id]])  !!}
    {!! Form::hidden('_method', 'PATCH') !!}
    @csrf
    <div class="card-group">
        <div class="card cardshadow text-white bg-dark mb-3" style="max-width: 30rem; margin-left:15px;">
            <div class="card-header "
                 style="font-size:22px; color: #5075e3 ">{{$character_data->name}} {{$character_data->last_name}} -
                ({{$class_name['class_long']}})
            </div>
            <div class="card-body">
                <h4 class="card-title" style="color:orange;">log out of game and back in to update<br>
                    <hr>


                    Name:
                    {{ Form::text('name', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    Last Name:
                    {{ Form::text('last_name', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    Title:
                    {{ Form::text('title', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    Suffix:
                    {{ Form::text('suffix', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    current zone: {{$zone->long_name}}
                    {{ Form::text('zone_id', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    Level:
                    {{ Form::text('level', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    aa points:
                    {{ Form::text('aa_points', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                </h4>
            </div>
        </div>

        <div class="card cardshadow text-white bg-dark mb-3" style="max-width: 30rem; margin-left:15px;">
            <div class="card-header " style="font-size:22px; color: #5075e3 ">Stats</div>
            <div class="card-body">
                <h4 class="card-title" style="color:orange;">


                    str:
                    {{ Form::text('str', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    sta:
                    {{ Form::text('sta', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    cha:
                    {{ Form::text('cha', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    dex:
                    {{ Form::text('dex', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    int:
                    {{ Form::text('int', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    agi:
                    {{ Form::text('agi', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                    wis:
                    {{ Form::text('wis', null, ['class' => 'form-control', 'style' => 'width:220px; margin-left:15px;']) }}
                </h4>
            </div>
        </div>


        <div class="card cardshadow text-white bg-dark mb-3" style="max-width: 30rem; margin-left:15px;">
            <div class="card-header " style="font-size:22px; color: #5075e3 ">Skills- coming soon</div>
            <div class="card-body">
                <h4 class="card-title" style="color:orange;">
                    @foreach($character_skills as $character_skill)

                        {{$character_skill->skill_id}}/{{$character_skill->value}} |
                    @endforeach
                </h4>
            </div>

            {{ Form::submit ('update', ['class' => 'btn btn-success  btn-xs']) }}
            {!! Form::close() !!}
        </div>
    </div>
@endsection