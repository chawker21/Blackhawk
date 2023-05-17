@extends('legislator.layouts.app')
@section('content')
    <header>
<div class="content">
    <div class="title m-b-md">
        Chawker21.blue/Legislator
    </div>

    <div class="links">
        <a href="/legislator/Legislators">Current Legislators</a>
        @can('admin_create', Auth::user())
            <a href="/legislator/getLegislators">get Legislators (admin only)</a>
            @endcan

    </div>
</div>
    </header>
@endsection