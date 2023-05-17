@extends('exotic.layouts.page')

@section('content')

    <header class={{$page}}>
{{--@include('exotic.navbars.nav')--}}
    {{--<div class="row" >--}}
        {{--<div class="header thumbnail">--}}
            {{--<img src="/exotic_resources/img/{{$page}}/IMG_header.jpg">--}}
        {{--</div>--}}
    {{--</div>--}}


        @include('exotic.partials._carousel')
        <script type="text/javascript">
            var imgfoldername = '{!! $page!!}/';

        </script>




    </header>
@stop