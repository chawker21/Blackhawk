@extends('presidents.layouts.app')
@section('content')
    <header>
        <div class="content">
            <div class="title m-b-md">
                <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/presidents
            </div>
            {{--@include('presidents.partials._sdhover')--}}

            @foreach($presidents as $president)
                <div class="container col-md-12">
                    <div class="row">
                        <div class="col-md-6">
                            {{--<h1 style="color:cornflowerblue; margin-bottom:40px;">{{$president->president}}</h1>--}}
                            <a  href="/presidents_resources/img/{{$president->president}}.png"><h1>{{$president->president}}</h1></a>


                            <img class="img-rounded main-page-img" src="/presidents_resources/img/{{$president->president}}.png" height="200" alt="">
                        </div>
                        <div class="col-md-6">
                            {{--<h1 style="color:cornflowerblue; margin-bottom:40px;">{{$president->vice}}</h1>--}}
                            <a  href="/presidents_resources/img/{{$president->vice}}.png"><h1>{{$president->vice}}</h1></a>
                            <img class="img-rounded main-page-img" src="/presidents_resources/img/{{$president->vice}}.png" height="200" alt="">

                        </div>

                    </div>
                    <hr style="border:3px solid gold;">
                </div>
                <script type="text/javascript">
                    google.charts.load('current', {'packages':['timeline']});
                    google.charts.setOnLoadCallback(drawChart);
                    function drawChart() {

                        var container = document.getElementById('timeline{{$president->id}}');
                        var chart = new google.visualization.Timeline(container);
                        var dataTable = new google.visualization.DataTable();

                        dataTable.addColumn({ type: 'string', id: 'President' });
                        dataTable.addColumn({ type: 'date', id: 'Start' });
                        dataTable.addColumn({ type: 'date', id: 'End' });

                        dataTable.addRows([


                            ['{{$president->president}}', new Date({{$president->startyear}}, {{$president->startmonth}}, {{$president->startday}}), new Date({{$president->endyear}}, {{$president->endmonth}}, {{$president->endday}}) ],


                        ]);


                        chart.draw(dataTable);
                    }
                </script>

                {{--<li style="list-style: none;" ><a class="btn" href="/presidents/{{$president->president}}"><h3>{{$president->president}}</h3>--}}
                        {{--<img class="img-rounded main-page-img" height="200" src="/presidents_resources/img/{{ $president->president}}.png"  alt="VM1">--}}
                        {{--<h3 class="list-group-item-heading itemheading">{{$president->vice}}</h3>--}}

                    {{--</a>--}}
                {{--</li>--}}
            @endforeach

        </div>
    </header>
@endsection
