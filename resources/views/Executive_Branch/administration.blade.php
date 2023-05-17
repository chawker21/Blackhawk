@extends('presidents.layouts.app')
@section('content')
    <header>
        <div class="content">
            <div class="title m-b-md">
                <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/line of succession
            </div>
            {{--@include('presidents.partials._sdhover')--}}

            @foreach($executive_branch as $executive_branch)
                <div class="container col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            {{--<h1 style="color:cornflowerblue; margin-bottom:40px;">{{$executive_branch->president}}</h1>--}}
                            <a  href="{{$executive_branch->wiki_link}}"><h1>{{$executive_branch->office}}</h1></a>
                            <a  href="/presidents/{{$executive_branch->head}}"><h1>{{$executive_branch->head}}</h1></a>

                            <img class="img-rounded main-page-img" src="/presidents_resources/gov_seals/{{$executive_branch->department}}.png" height="200" alt="">

                        </div>

                    </div>
                    <hr style="border:3px solid gold;">
                </div>

                {{--<li style="list-style: none;" ><a class="btn" href="/presidents/{{$executive_branch->president}}"><h3>{{$executive_branch->president}}</h3>--}}
                {{--<img class="img-rounded main-page-img" height="200" src="/presidents_resources/img/{{ $executive_branch->president}}.png"  alt="VM1">--}}
                {{--<h3 class="list-group-item-heading itemheading">{{$executive_branch->vice}}</h3>--}}

                {{--</a>--}}
                {{--</li>--}}
            @endforeach

        </div>
    </header>
@endsection