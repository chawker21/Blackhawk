@extends('P5_Sketches.layouts.P5_app')
@section('content')
    <header>
    <div class="content">
        <div class="title m-b-md">
            Chawker21.blue/P5_Sketches
        </div>

        <div class="links">
            <a href="/P5_Sketches/pages/earthquake">earthquake</a>
            <a href="/P5_Sketches/pages/timedistortion">timedistortion</a>
            <a href="/P5_Sketches/pages/clock">clock</a>
            @can('admin_create', Auth::user())
                <a href="/P5_Sketches/pages/cubewave">cubewave</a>
            @endcan

        </div>
    </div>
    </header>
@endsection