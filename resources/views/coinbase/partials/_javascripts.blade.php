<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{asset('js/app.js')}}" type="text/javascript" charset="utf-8"></script>
<script src="{{asset('exotic_resources/js/DChome.js')}}" type="text/javascript" charset="utf-8"></script>

<script src="{{asset('exotic_resources/js/MyJS.js')}}" type="text/javascript" charset="utf-8"></script>

<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Buy Sell', 'Volume'],
            ['Buy Volume', {{$buys->sum('size')}}],
            ['Sell Volume', {{$sells->sum('size')}}]

        ]);

        var options = {
            backgroundColor: 'transparent',
            'width': 400,
            'height': 300,
            colors: ['#3CB371', '#4169E1'],
            title: 'Volume',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('volume_3d'));
        chart.draw(data, options);
    }
</script>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
    google.charts.load("current", {packages: ["corechart"]});
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
            ['Buy Sell', 'Trades'],
            ['Buy Trades', {{$buys->count()}}],
            ['Sell Trades', {{$sells->count()}}]

        ]);

        var options = {
            backgroundColor: 'transparent',
            'width': 400,
            'height': 300,
            colors: ['#3CB371', '#4169E1'],
            title: 'Trades',
            is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('count_3d'));
        chart.draw(data, options);
    }


</script>


