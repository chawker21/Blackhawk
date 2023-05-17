@extends('app.layouts.app')

@section('content')
    <div class="container " style="margin-top:25px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h1></h1>

                        <div class="card-body bg-secondary">
                            <p>{{$maps->content->link}}</p>

                            <ul>

                                @foreach($results as $result)
                                    <li><a href="{{$result->id}}">{{$result->id}}</a></li>
                                    <li>{{$result->description[0]}}</li>
                                    @foreach($result->mime_type as $mime_type)
                                        <li>{{$mime_type}}</li>
                                        @endforeach

                                    <li><a href="{{$result->url}}">{{$result->url}}</a></li>
                                    <li>{{$result->item->title}}</li>

@endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
