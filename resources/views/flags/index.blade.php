@extends('flags.layouts.app')
@section('content')
    <header>
        <div class="content">
            <div class="title m-b-md">
                <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/flags
            </div>
            @include('library.partials._sdhover')


                <a class="btn" href="/flags/World"><h3>World</h3></a><br>
                <a class="btn" href="/flags/States"><h3>States</h3></a><br>
            <a class="btn" href="/flags/Nato"><h3>Nato</h3></a><br>
            <a class="btn" href="/flags/UnitedNations"><h3>United Nations</h3></a><br>

            <a class="btn" href="/flags/p5"><h3>P5</h3></a><br>
            <a class="btn" href="/flags/G7"><h3>G7</h3></a><br>
            <a class="btn" href="/flags/OPEC"><h3>OPEC</h3></a><br>
            <a class="btn" href="/flags/africanunion"><h3>African Union</h3></a><br>
            <a class="btn" href="/flags/ArabLeague"><h3>Arab League</h3></a><br>
            <a class="btn" href="/flags/ASEAN"><h3>ASEAN</h3></a><br>
            <a class="btn" href="/flags/CIS"><h3>CIS</h3></a><br>
            <a class="btn" href="/flags/ECO"><h3>ECO</h3></a><br>
            <a class="btn" href="/flags/OIC"><h3>OIC</h3></a><br>
            <a class="btn" href="/flags/map/country"><h3>Country Map</h3></a><br>
            <a class="btn" href="/flags/map/states"><h3>State Map</h3></a><br>
        </div>
    </header>
@endsection
