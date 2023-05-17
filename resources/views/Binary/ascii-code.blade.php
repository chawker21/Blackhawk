@extends('Binary.layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">extended ASCII Values</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <table class="col-sm-4" style="color:#000000;">
                                        <tr style="font-weight:100;"><th class="col-sm-1">DEC</th>
                                            <th class="col-sm-1">OCT</th>
                                            <th class="col-sm-1">HEX</th>
                                            <th class="col-sm-1">BIN</th>
                                            <th class="col-sm-1">Symbol</th>
                                            <th class="col-sm-1">HTML_Number</th>
                                            <th class="col-sm-1">HTML_Name</th>
                                            <th class="col-sm-1">Description</th>
                                        </tr>

                                        @foreach($asciis as $ascii)

                                            <tr>
                                                <td class="col-sm-1">{{$ascii->DEC}}</td>
                                                <td class="col-sm-1">{{$ascii->OCT}}</td>
                                                <td class="col-sm-1">{{$ascii->HEX}}</td>
                                                <td class="col-sm-1">{{$ascii->BIN}}</td>
                                                <td class="col-sm-1">{!!$ascii->HTML_Number !!}</td>
                                                <td class="col-sm-1">{{$ascii->HTML_Number}}</td>
                                                <td class="col-sm-1">{{$ascii->HTML_Name}}</td>
                                                <td class="col-sm-1">{{$ascii->Description}}</td>

                                            </tr>

                                        @endforeach

                                    </table>



                                </div>
                            </div>
                    </ul>
                    </li>
                </div>
            </div>
            </div>
        </div>
        @endsection






