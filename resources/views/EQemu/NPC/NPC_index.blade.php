@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_NPC')
    @foreach($NPCs as $NPC)
        <div class="container">

            <div class="card">

                <div class="card-body">


                    {{$NPC->id}} <a href="{{ route('/EQemu/NPC/NPC_show', $NPC->id) }}"> {!! ucwords($NPC['name']) !!}</a>


                </div>
            </div>

        </div>
    @endforeach
    {{ $NPCs->onEachSide(1)->links() }}
@endsection