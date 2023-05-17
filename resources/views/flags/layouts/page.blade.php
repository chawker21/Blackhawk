@extends('flags.layouts.appindex')


@section('title', '| Flag Index')

@section('content')
    <header>
        @include("flags.navbars.nav")


        <div class="main-body">
            @foreach($flags as $flag)

                <li class="col-xs-6 col-sm-4 col-md-3 center-block" id="" onclick="click{{$page->title}}(this)" ><a href=/flags/pages/{{$page->title}} >
                        <img class="img-rounded main-page-img" src="/flag_resources/img/index/{{$page->title}}.jpg"  alt="VM1">
                        <h3 class="list-group-item-heading itemheading">{{$page->reference}}</h3>
                    </a>
                </li>

            @endforeach



        </div>
    </header>
@endsection