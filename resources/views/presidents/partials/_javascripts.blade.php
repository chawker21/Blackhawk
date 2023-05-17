
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{asset('js/app.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('exotic_resources/js/DChome.js')}}" type="text/javascript" charset="utf-8"></script>

<script src="{{asset('exotic_resources/js/MyJS.js')}}" type="text/javascript" charset="utf-8"></script>


<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['timeline']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var container = document.getElementById('timeline');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'President' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });

        dataTable.addRows([
                @foreach($presidents as $president)

            ['{{$president->president}}', new Date({{$president->startyear}}, {{$president->startmonth}}, {{$president->startday}}), new Date({{$president->endyear}}, {{$president->endmonth}}, {{$president->endday}}) ],
                @endforeach

            ]);


        chart.draw(dataTable);
    }
</script>

