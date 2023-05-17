@extends('app.layouts.app')

@section('content')
    @foreach($sonoffs as $sonoff)
        <div class="card" style="width: 17rem; margin:50px 0 0 200px;">
            <div class="card-body">
             <a type="button" class="btn btn-xs cust-btn-prim" href="{{ route($sonoff->route)}}">{{$sonoff->host}}/{{$sonoff->route}}</a>
            </div>
        </div>
    @endforeach
@endsection