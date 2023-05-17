@extends('Binary.layouts.app')

@section('content')

    <div class="col-md-12">

        <tr>

            @foreach($unicodes as $unicode)


                    @include('app.modals.Binary_modal')

               {{--<th > <div class="col-md-2" style="display: inline-block; width: 100px; height: 100px; border: 2px solid #000; text-align: center;"><h1 style="text-align:center;">{{$unicode->Character}}</h1></div></th>--}}


            @endforeach

        </tr>

    </div>

    {{$unicodes->links()}}
@endsection
