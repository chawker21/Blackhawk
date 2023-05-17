@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_item')
    <div class="container">

        <div class="card">
            <h5 class="card-header">Please enter an item seach term</h5>
            <div class="card-body">
                <h5 class="card-title">item search Term</h5>
                <form action="{{route('/EQemu/item/item_result')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="name" placeholder="item name" class="form-control">

                    <input type="submit" class="btn btn-primary">
                </form>


            </div>
        </div>
    </div>


@endsection