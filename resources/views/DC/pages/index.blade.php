@extends('DC.layouts.indexapp')


@section('title', '| Photo Index')

@section('content')
   <header>
       @include("DC.navbars.nav")


       <div class="main-body">
       @foreach($pages as $page)

               <li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Tomb1" onclick="click{{$page->title}}(this)" ><a href=/DC/pages/{{$page->title}} >
                       <img class="img-rounded main-page-img" src="/DC_resources/assets/assets/index/{{$page->title}}.jpg"  alt="VM1">
                       <h3 class="list-group-item-heading itemheading">{{$page->title}}.jpg</h3>
                   </a>
               </li>

       @endforeach



       </div>
   </header>
@endsection

    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Arlington1" onclick="clickArlington1(this)"><a href="Arlington1" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/arlington2.jpg" alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Arlington Cemetary</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="CapitolHill1" onclick="clickCapitolHill1(this)"><a href="CapitolHill1" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/capitol1.jpg" alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Capitol Hill 1</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="CapitolHill2" onclick="clickCapitolHill2(this)"><a href="CapitolHill2" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/capitol2.jpg" alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Capitol Hill 2</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="CapitolHill3" onclick="clickCapitolHill3(this)"><a href="CapitolHill3" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/capitol3.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Capitol Hill 3</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="NatCath" onclick="clickNatCath(this)"><a href="NatCath" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/cathedral.jpg" alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">National Cathedral</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Sculptures" onclick="clickSculptures(this)"><a href="Sculptures" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/chess1.jpg" alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Sculptures</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Rotunda" onclick="clickRotunda(this)"><a href="Rotunda" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/congress.jpg" alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Capitol Rotunda</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Jefferson" onclick="clickJefferson(this)"><a href="Jefferson" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/jeffersonmemorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Jefferson Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Korea" onclick="clickKorea(this)"><a href="Korea" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/koreanwarmemorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Korean War Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="LOC" onclick="clickLOC(this)"><a href="LOC" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/libraryofcongress.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Library of Congress</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="lincoln" onclick="clicklincoln(this)"><a href="lincoln" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/lincolnmemorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Lincoln Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="MLK" onclick="clickMLK(this)"><a href="MLK" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/mlkmemorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">MLK Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Night" onclick="clickNight(this)"><a href="Night" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/night.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Night on the Mall</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Pentagon" onclick="clickPentagon(this)"><a href="Pentagon" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/pentagonmemorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Pentagon Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="FDR" onclick="clickFDR(this)"><a href="FDR" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/rooseveltmemorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">FDR Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Monuments" onclick="clickMonuments(this)"><a href="Monuments" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/shiloh.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Monuments</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Tomb2" onclick="clickTomb2(this)"><a href="Tomb2" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/tombofunknownsoldier.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Unknown Soldier 2</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Vietnam" onclick="clickVietnam(this)"><a href="Vietnam" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/vietnammemorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Vietnam Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="WashMon" onclick="clickWashMon(this)"><a href="WashMon" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/washingtonmonument.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Washington Monument--}}
            {{--</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="WhiteHouse" onclick="clickWhiteHouse(this)"><a href="WhiteHouse" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/whitehouse.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">White House</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="WW1" onclick="clickWW1(this)"><a href="WW1" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/ww1.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">WW1 Monument</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="WW2" onclick="clickWW2(this)"><a href="WW2" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/ww2memorial.jpg"  alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">World War 2 Memorial</h3>--}}
        {{--</a>--}}
    {{--</li>--}}
    {{--<li class="col-xs-6 col-sm-4 col-md-3 center-block" id="Lafayette" onclick="clickLafayette(this)"><a href="Lafayette" >--}}
            {{--<img class="img-rounded img-responsive main-page-img" src="/photo_resources/images/WashDC/homepagepics/JPEG/jackson.jpg" alt="VM1">--}}
            {{--<h3 class="list-group-item-heading itemheading">Lafayette Square</h3>--}}
        {{--</a>--}}
    {{--</li>--}}

