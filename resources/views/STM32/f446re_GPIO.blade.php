@extends('layouts.app')

@section('content')

    {{--@include('guides.partials._profile')--}}
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Stem32f446re</div>

                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <iframe style="width: 100%; height: 820px" src="{{asset("/STM32_resources/reference_manual.pdf#page=175")}}"></iframe>
                                    <img class="card-img-top" style="" src="{{asset("/STM32_resources/GPIO-1.JPG") }}" alt="GPIO-1">
                                    <img class="card-img-top" style="" src="{{asset("/STM32_resources/GPIO-2.JPG") }}" alt="GPIO-2">
                                    <img class="card-img-top" style="" src="{{asset("/STM32_resources/GPIO-3.JPG") }}" alt="GPIO-3">
                                    <img class="card-img-top" style="" src="{{asset("/STM32_resources/GPIO-4.JPG") }}" alt="GPIO-4">
                                    <img class="card-img-top" style="" src="{{asset("/STM32_resources/GPIO-5.JPG") }}" alt="GPIO-5">
                                    <img class="card-img-top" style="" src="{{asset("/STM32_resources/GPIO-6.JPG") }}" alt="GPIO-6">
                                    <div id="object" style="font-size:38px;"></div>

                                </div>
                            </div>
                    </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection