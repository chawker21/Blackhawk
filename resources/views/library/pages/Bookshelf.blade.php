@extends('library.layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container-sm">
        <div class="row">
            <div class="col-md-12">

                    @foreach($books as $item)
                        @if($item->category == $library->title)
                        <div class="card"
                             style="padding:0 10px 15px 10px; background-size: 300px 180px; background-image:url({{asset('/library_resources/assets/bookbinding.jpg') }}">
                            <div class="card-header"><h3 data-toggle="collapse" data-target="#bookcollapse{{$item->id}}"
                                                         style="color:white;">{{$item->category}}{{$item->title}}</h3>
                            </div>
                            <div class="card-body collapse" id="bookcollapse{{$item->id}}"
                                 style="background-size: 1500px 1000px; background-image:url({{asset('/library_resources/assets/bookshelf_bg.jpg') }}">
                                <embed style="width: 90%; height: 820px; transform:translateX(5%);"
                                       src="{{asset('/library_resources/assets/pdf/'.$item['category']."/".$item['title'])}}"></embed>
                            </div>
                        </div>
                        @endif
                    @endforeach

            </div>


                    @foreach($images as $item)
                        @if($item->category == $library->title)
                    <div class="card "
                         style="padding:0 10px 15px 10px; background-size: 300px 180px; background-image:url({{asset('/library_resources/assets/bookbinding.jpg') }}">
                            <div class="card-header"><h3
                                    style="color:white;">{{$item->category}}{{$item->title}}</h3>
                            </div>
                            <div class="card-body"
                                 style="padding:10px 30px 10px 30px; background-size: 1500px 1000px; background-image:url({{asset('/library_resources/assets/bookshelf_bg.jpg') }}">
                                <img style=" max-height: 1200px;"
                                     src="{{asset('/library_resources/assets/img/'.$item['category']."/".$item['title'])}}"></img>
                            </div>
                    </div>
                        @endif
                    @endforeach

            </div>


                    @foreach($audio as $item)
                        @if($item->category == $library->title)
                <div class="card "
                     style="padding:0 10px 15px 10px; background-size: 300px 180px; background-image:url({{asset('/library_resources/assets/bookbinding.jpg') }}">
                            <div class="card-header"><h3
                                    style="color:white;">{{$item->category}}{{$item->title}}</h3>
                            </div>
                            <div class="card-body"
                                 style="background-size: 1500px 1000px; background-image:url({{asset('/library_resources/assets/bookshelf_bg.jpg') }}">
                                <audio
                                    src="{{ asset("/library_resources/assets/aud/".$item['category']."/".$item['title'])}}"
                                    controls preload="none"></audio>
                            </div>
                </div>
                        @endif
                    @endforeach

            </div>


                    @foreach($video as $item)
                        @if($item->category == $library->title)
                            <div class="card "
                                 style="padding:0 10px 15px 10px; background-size: 300px 180px; background-image:url({{asset('/library_resources/assets/bookbinding.jpg') }}">
                            <div class="card-header"><h3
                                    style="color:white;">{{$item->category}}{{$item->title}}</h3>
                            </div>
                            <div class="card-body"
                                 style="background-size: 1500px 1000px; background-image:url({{asset('/library_resources/assets/bookshelf_bg.jpg') }}">
                                <video style="max-height: 500px;"
                                       src="{{ asset("/library_resources/assets/video/".$item['category']."/".$item['title'])}}"
                                       type="video/mp4" controls preload="none"></video>
                            </div>
                            </div>
                        @endif
                    @endforeach


        </div>
    </div>
@endsection
