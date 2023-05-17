@extends('presidents.layouts.app')
@section('content')
    <header>
        <div class="content">
            <div class="title m-b-md">
                <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/line of succession
            </div>
            {{--@include('presidents.partials._sdhover')--}}

            @foreach($successors as $successor)
                <div class="container col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            {{--<h1 style="color:cornflowerblue; margin-bottom:40px;">{{$successor->president}}</h1>--}}
                            <a  href="{{$successor->wiki_link}}"><h1>{{$successor->office}}</h1></a>
                            <a  href="/presidents/{{$successor->head}}"><h1>{{$successor->head}}</h1></a>

                            <img class="img-rounded main-page-img" src="/presidents_resources/gov_seals/{{$successor->department}}.png" height="200" alt="">

                        </div>

                    </div>
                    <hr style="border:3px solid gold;">
                </div>

                {{--<li style="list-style: none;" ><a class="btn" href="/presidents/{{$successor->president}}"><h3>{{$successor->president}}</h3>--}}
                {{--<img class="img-rounded main-page-img" height="200" src="/presidents_resources/img/{{ $successor->president}}.png"  alt="VM1">--}}
                {{--<h3 class="list-group-item-heading itemheading">{{$successor->vice}}</h3>--}}

                {{--</a>--}}
                {{--</li>--}}
            @endforeach

        </div>
    </header>
@endsection