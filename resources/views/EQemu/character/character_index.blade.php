@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_character')
    @foreach($characters as $character)
        <div class="container">

            <div class="card">
                <h5 class="card-header">{{$character->title}} {{$character->name}} {{$character->last_name}} {{$character->suffix}}
                    <span style="float:right;">ID: {{$character->id}}</span></h5>
                <div class="card-body">
                    <h5 class="card-title"></h5>

                    <a href="{{ route('/EQemu/character/character_show', $character->id) }}"> {!! ucwords($character['name']) !!}


                    </a><span style="margin-left:50px;">level: {{$character->level}}</span>
                    <span style="margin-left:50px;">Zone: {{$zone->long_name}}</span>
                    <span style="margin-left:50px;">HP: {{$character->cur_hp}}</span>
                    <span style="margin-left:50px;">Mana: {{$character->mana}}</span>


                </div>
            </div>

        </div>
    @endforeach
@endsection
