@extends('exotic.layouts.appindex')


@section('title', '| Photo Index')

@section('content')
   <header>
       @include("exotic.navbars.nav")


       <div class="main-body">
       @foreach($pages as $page)

               <li class="col-xs-6 col-sm-4 col-md-3 center-block" id="" onclick="click{{$page->title}}(this)" ><a href=/exotic/pages/{{$page->title}} >
                       <img class="img-rounded main-page-img" src="/exotic_resources/img/index/{{$page->title}}.jpg"  alt="VM1">
                       <h3 class="list-group-item-heading itemheading">{{$page->reference}}</h3>
                   </a>
               </li>

       @endforeach



       </div>
   </header>
@endsection



