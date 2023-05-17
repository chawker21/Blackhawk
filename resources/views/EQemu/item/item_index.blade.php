@extends('EQemu.layouts.app')

@section('content')
    @include('EQemu.navbars._navbar_item')
    <div class="container">

        <div class="card">
            <h5 class="card-header">Please enter an item seach term</h5>
            <div class="card-body">
                <h5 class="card-title">item search Term</h5>
                <form action="{{route('/EQemu/item/item_result')}}" method="GET" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="query" placeholder="item name" class="form-control">

                    <input type="submit" class="btn btn-primary">
                </form>


            </div>
        </div>
    </div>


    @foreach($items as $item)
        <div class="container">

            <div class="card">

                <div class="card-body">


                    <a href="{{ route('/EQemu/item/item_show', $item->id) }}"> {!! ucwords($item['Name']) !!}</a>


                </div>
            </div>

        </div>
    @endforeach
    {{ $items->onEachSide(1)->links() }}


@endsection