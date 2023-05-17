@extends('app.layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">extended UTF-8 Values</div>
                            <!-- Message -->
                            @if(Session::has('message'))
                                <p >{{ Session::get('message') }}</p>
                        @endif

                        <!-- Form -->
                            <form method='post' action='/Binary/uploadutf' enctype='multipart/form-data' >
                                {{ csrf_field() }}
                                <input type='file' name='file' >
                                <input type='submit' name='submit' value='Import'>
                            </form>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <table  style="color:#000000;">
                                        <p> &#x401; &#x1F197;</p>
                                        <tr style="font-weight:100;">
                                            <th class="col-md-1">id</th>
                                            <th class="col-md-1">Unicode</th>
                                            <th class="col-md-1">Character</th>
                                            <th class="col-md-2">UTF-8 BIN</th>
                                            <th class="col-md-1">HTML_Number</th>

                                            <th class="col-md-4">Description</th>
                                        </tr>

                                        @foreach($utfs as $utf)

                                            <tr>

                                                <td class="col-md-1">{{$utf->id}}</td>
                                                <td class="col-sm-1">{{$utf->Unicode}}</td>

                                                <td class="col-sm-1" style="font-size:20px;">{{$utf->Character}}</td>
                                                <td class="col-sm-2">{!! $utf->utf_binary !!}</td>

                                                <td class="col-sm-1">{{$utf->HTML_Number}}</td>

                                                <td class="col-sm-4">{{$utf->Description}}</td>

                                            </tr>

                                        @endforeach

                                    </table>

                                    {{$utfs->links()}}

                                </div>
                            </div>
                    </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection