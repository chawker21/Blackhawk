@extends('library.layouts.app')
@section('content')
    <header>
        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/library
        </div>
    </header>
    <div id="map"></div>
    <div class="container-sm">
        <div class="row" style="margin:0 420px 0 420px;">
            @foreach($libraryTypes as $type)
                <div class="card  "
                     style=" background-size: 300px 180px; background-image:url({{asset('/library_resources/assets/bookbinding.jpg') }}">
                    <div class="card-header"><h3 style="color:white;">{{$type['title']}}</h3></div>
                    <div class="card-body"
                         style="background-size: 1500px 1000px; background-image:url({{asset('/library_resources/assets/bookshelf_bg.jpg') }}">
                        <div class="card-header">
                            <h3 style="color:white;">{{$type['title']}}</h3>
                        </div>
                        <div class="card-body">
                            @foreach($type['items'] as $item)
                                <a class="btn btn-lg btn-primary" style="margin: 0 0 10px 0;" href="/library/{{$item->title}}">
                                    <h3 style="font-weight: bold;">{{$item->title}}</h3>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection


