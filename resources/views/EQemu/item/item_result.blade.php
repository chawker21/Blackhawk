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
                    <input type="text" name="query" placeholder="item name" value='' class="form-control">

                    <input type="submit" class="btn btn-primary">
                </form>


            </div>
        </div>
    </div>




    <div class="container">
        <div class="row justify-content-center">
            <div class="col col-sm-6">
                <div class="card" style="background-color:lightgrey;">
                    <div class="card-header">item List</div>
                    <div class="card-body">
                        @foreach($items as $item)
                            <li><a href="{{ route('/EQemu/item/item_show', $item->id) }}">
                                    {{$item->Name}}<span
                                            style="float:right; margin-right:10px;">{!! ucwords($item['id']) !!}</span></a>

                            </li>
                            <hr>
                        @endforeach

                    </div>

                </div>
            </div>


        </div>
    </div>

    {{ $items->links() }}
@endsection