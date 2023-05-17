@extends('DC.layouts.page')




<body class="page">
@section('content')
    <div class="row">
        <div class="header ">
            <img src="/DC_resources/assets/img/WashDC/{{$page->title}}/img_header.jpg">
        </div>
    </div>
    @include('DC.partials._carousel')
</body>
@stop
