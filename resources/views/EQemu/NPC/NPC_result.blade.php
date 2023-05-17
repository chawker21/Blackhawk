@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_NPC')

    <div class="container">
        <div class="row">


            <div class="col col-sm-6">
                <div class="card" style="background-color:lightblue;">

                    <div class="card-header">NPC List</div>

                    <div class="card-body">
                        @foreach($NPC as $NPC)
                            <li><span style="color:gray;">ID:</span><a href="{{ route('/EQemu/NPC/NPC_show', $NPC->id) }}">
                                    {!! ucwords($NPC['id']) !!}</span> - {{$NPC->name}}</a><br>
                                    <span style="color:darkblue;">Level:</span> <span style="color:coral;">{{$NPC->level}}</span> |
                                    <span style="color:darkblue;">AC:</span> <span style="color:coral;">{{$NPC->AC}}</span> |
                                        <span style="color:darkblue;">HP:</span> <span style="color:coral;">{{$NPC->hp}}</span>

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