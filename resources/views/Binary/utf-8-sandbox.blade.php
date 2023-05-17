@extends('app.layouts.app')

@section('content')
    <clock></clock>
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">extended UTF-8 Values</div>



                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <!-- Display the countdown timer in an element -->
                                    <script>
                                    var phase = 8;
                                    var Timer = setInterval(function(){
                                        for (i = 1; i < phase; i++) {
                                            var utf = '&#x1F31';
                                            var utfi = [i];
                                            var moon = utf.concat(utfi);



                                        }
                                    document.getElementById("moon").innerHTML = moon;
                                    phase -= 1;
                                    if(phase <= 1){
                                    phase += 8;
                                    i -= 1;

                                    }
                                    }, 100);
                                    </script>
                                    <div id="moon" style="font-size:38px;"></div>
                                    <script>
                                        var symbol = 1;
                                        var Timer = setInterval(function(){
                                            for (i = 0x00; i < symbol; i++) {
                                                var utf = '&#x00';
                                                var utfii = [i];
                                                var utfi = [i];
                                                var NegCirc = utf.concat(utfii);
                                            }
                                            document.getElementById("countdown").innerHTML =NegCirc;


                                            symbol += 1;


                                        }, 500);
                                    </script>
                                    <div id="countdown" style="font-size:38px;"></div>
                                    <script type="text/javascript">

                                        var variations =23;


                                        var Timer = setInterval(function(){
                                            for(i = 70; i < 70 + variations; i++) {

                                                var base = '158370';
                                                var increment = 1583 + [i];
                                                var object = increment;

                                            }
                                            if(increment == 158393){
                                                object = '&#x1F550';
                                            }
                                            if(increment == 158392){
                                                object = '&#x1F551';
                                            }
                                            if(increment == 158391){
                                                object = '&#x1F552';
                                            }
                                            if(increment == 158390){
                                                object = '&#x1F553';
                                            }
                                            if(increment == 158389){
                                                object = '&#x1F554';
                                            }
                                            if(increment == 158388){
                                                object = '&#x1F555';
                                            }
                                            if(increment == 158387){
                                                object = '&#x1F556';
                                            }
                                            if(increment == 158386){
                                                object = '&#x1F557';
                                            }
                                            if(increment == 158385){
                                                object = '&#x1F558';
                                            }
                                            if(increment == 158384){
                                                object = '&#x1F559';
                                            }
                                            if(increment == 158383){
                                                object = '&#x1F55A';
                                            }
                                            if(increment == 158382){
                                                object = '&#x1F55B';
                                            }
                                            if(increment == 158381){
                                                object = '&#x1F55C';
                                            }
                                            if(increment == 158380){
                                                object = '&#x1F55D';
                                            }
                                            if(increment == 158379){
                                                object = '&#x1F55E';
                                            }
                                            if(increment == 158378){
                                                object = '&#x1F55F';
                                            }
                                            if(increment == 158377){
                                                object = '&#x1F560';
                                            }
                                            if(increment == 158376){
                                                object = '&#x1F561';
                                            }
                                            if(increment == 158375){
                                                object = '&#x1F562';
                                            }
                                            if(increment == 158374){
                                                object = '&#x1F563';
                                            }
                                            if(increment == 158373){
                                                object = '&#x1F564';
                                            }
                                            if(increment == 158372){
                                                object = '&#x1F565';
                                            }
                                            if(increment == 158371){
                                                object = '&#x1F566';
                                            }
                                            if(increment == 158370){
                                                object = '&#x1F567';
                                            }

                                            document.getElementById("object").innerHTML = object;

                                            variations -= 1;
                                            if(variations <= 1){
                                                variations += 23;
                                                i -= 1;

                                            }
                                        }, 5000);
                                    </script>
                                    <div id="object" style="font-size:38px;"></div>



                                    <p style="font-size:108px;"> &#x1F0CF; &#x1F0BF; &#x1F0D5; &#x1F0E0;</p>
                                    <p style="font-size:108px; color:red;">&#x1F0BE;&#x1F0C8;</p>
                                    <p style="font-size:108px; color:purple;">&#x1F01F;&#x1F023;&#x1F00D;</p>
                                    <p style="font-size:48px;">&#xFC3;&#xFC7;&#x102A;&#x1235C;</p>
                                    <p style="font-size:48px;">&#xE2DF;</p>
                                    <p id="c12"></p>
                                    {{--@foreach($utfs as $utf)--}}
                                            {{--<p class="col-sm-1" style="font-size:20px;">{{$utf->Character}} {{$utf->HTML_Number}}</p>--}}
                                     {{--@endforeach--}}

                                </div>
                            </div>
                    </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>
@endsection