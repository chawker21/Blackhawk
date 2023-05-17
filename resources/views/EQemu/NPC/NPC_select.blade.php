@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_NPC')

    <div class="container">

        <div class="card">
            <h5 class="card-header">Please Enter A NPC seach term</h5>
            <div class="card-body">
                <h5 class="card-title">NPC search Term</h5>
                <form action="{{route('EQemu/NPC/NPC_result')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="NPC name" class="form-control">

                    <input type="submit" class="btn btn-primary">
                </form>


            </div>
        </div>
    </div>


@endsection