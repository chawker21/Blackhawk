@extends('DC.layouts.page50')

@section('content')

    <header class=">
@include('DC.navbars.nav')
            <div class="row">
    <div class="header thumbnail">
        <img src="/DC_resources/assets/img/lincoln/lincoln_header.jpg">
    </div>
    </div>


    @include('DC.partials._carousel')
    <script type="text/javascript">
        var imgfoldername = 'lincoln/';

    </script>




    </header>
@stop