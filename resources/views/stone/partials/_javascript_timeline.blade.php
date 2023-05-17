<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="{{asset('/app_resources/js/components/audio_mouseover_btn.js')}}" type="text/javascript"></script>
<script src="{{asset('/app_resources/js/components/random_css_color.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {'packages':['timeline']});
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var container = document.getElementById('timeline');
        var chart = new google.visualization.Timeline(container);
        var dataTable = new google.visualization.DataTable();

        dataTable.addColumn({ type: 'string', id: 'Relative' });
        dataTable.addColumn({ type: 'date', id: 'Start' });
        dataTable.addColumn({ type: 'date', id: 'End' });

        dataTable.addRows([
                @foreach($relatives as $relative)

            ["{{$relative->first_name}} {{$relative->middle_name}} {{$relative->last_name}} {{$relative->surname}}  @if(!empty($relative->born_name))(born:{{$relative->born_name}})@endif ", new Date({{$relative->birth_year}}, {{$relative->birth_month}}, {{$relative->birth_day}}), new Date({{$relative->death_year}}, {{$relative->death_month}}, {{$relative->death_day}}) ],
            @endforeach

        ]);


        chart.draw(dataTable);
    }
</script>
<script type="text/javascript">
    google.charts.load('current', {packages:["orgchart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');


        data.addColumn('string', 'Father');


        data.addColumn('string', 'ToolTip');

        // For each orgchart box, provide the name, manager, and tooltip to show.
        data.addRows([
                @foreach($relatives as $relative)
            ["{{$relative->first_name}} {{$relative->middle_name}} {{$relative->last_name}} @if(!empty($relative->surname)){{$relative->surname}}@endif  @if(!empty($relative->born_name))(born:{{$relative->born_name}})@endif ","",""],

                ["{{$relative->father_first_name}} {{$relative->father_middle_name}} {{$relative->father_last_name}} @if(!empty($relative->father_surname)){{$relative->father_surname}}@endif","",""],

                ["","",""],
            @endforeach
        ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {'allowHtml':true});
    }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {
        "packages":["map"],
        // Note: you will need to get a mapsApiKey for your project.
        // See: https://developers.google.com/chart/interactive/docs/basic_load_libs#load-settings
        "mapsApiKey": "AIzaSyBKgg-z4a7mmEJQDqUDfv2GDq-0vhDVygw"
    });
    google.charts.setOnLoadCallback(drawChart);
    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Lat', 'Long', 'Name'],
            @foreach($person as $person)
                @if(isset($person->birthplace->lat))
                @if(isset($person->deathplace->lng))
            [{{$person->birthplace->lat}}, {{$person->birthplace->lng}}, {{$person->first_name}} {{$person->middle_name}} {{$person->last_name}} {{$person->surname}}],
            @endif
            @endif
            @endforeach
        ]);

        var options = {
            icons: {
                default: {
                    normal: 'https://icons.iconarchive.com/icons/icons-land/vista-map-markers/48/Map-Marker-Ball-Azure-icon.png',
                    selected: 'https://icons.iconarchive.com/icons/icons-land/vista-map-markers/48/Map-Marker-Ball-Right-Azure-icon.png'
                }
            }
        };

        var map = new google.visualization.Map(document.getElementById('map_markers_div'));
        map.draw(data, options);
    }

</script>

