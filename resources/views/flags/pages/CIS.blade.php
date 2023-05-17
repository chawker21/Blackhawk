@extends('flags.layouts.appindex')


@section('title', '| Photo Index')

@section('content')
    <body>
    @include("flags.navbars.nav")


    <div>
        <h1 style="color:cornflowerblue; margin-bottom:40px;">Flags of the Commonwealth of Independent States</h1>
        @foreach($flags as $flag)

            <li class="col-xs-6 col-sm-4 col-md-2 center-block" id="" onclick="click{{$flag->title}}(this)" ><a href=/flag_resources/img/worldflags/{{ strtolower($flag->abbr)}}.png >
                    <img class="img-rounded main-page-img" src="/flag_resources/img/worldflags/{{ strtolower($flag->abbr)}}.png"  alt="VM1">
                    <h3 class="list-group-item-heading itemheading">{{$flag->full}}</h3>
                    <h3 class="list-group-item-heading itemheading">{{$flag->UN}}</h3>
                </a>
            </li>

        @endforeach



    </div>
    </body>
@endsection