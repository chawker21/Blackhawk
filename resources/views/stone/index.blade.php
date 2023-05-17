@extends('stone.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/Stone
        </div>
    </header>
    <div class="container-sm">
        <div class="row" style="margin:0 20px 0 20px;">
            <div class="col-sm-3">
                <div class="card "
                     style=" background-size: 300px 180px; background-image:url({{asset('/library_resources/assets/bookbinding.jpg') }}">
                    <div class="card-header"><h3 style="color:white;">Stone Links</h3></div>
                    <div class="card-body"
                         style="background-size: 1500px 1000px; background-image:url({{asset('/library_resources/assets/bookshelf_bg.jpg') }}">
                        @foreach($links as $link)

                            <a class="btn border-success text-dark"
                               style="font-weight: bold; margin: 0 0 10px 20px; background-size: 100px 60px; background-image:url({{asset('/library_resources/assets/bookbinding.jpg') }}"
                               href="{{$link->route}}">
                                <h3 style="font-weight: bold;">{{$link->link}}</h3></a>

                        @endforeach
                    </div>
                </div>
            </div>


@endsection
