<template>
    <div class="container">
        <div class="panel-heading" style="font-size:20px;">Earthquake Data for past 30 days</div>
        <hr>
        <div id="c2" class="panel">made with <a href="https://earthquake.usgs.gov/earthquakes/feed/v1.0/csv.php">USGS</a> /
            <a href="https://mapbox.com">Mapbox</a> /
            <a href="https://P5js.org">P5</a> /
            <a href="https://www.youtube.com/watch?v=ZiYdOwOrGyc">Coding Train</a>
        </div>
        <pre class="col-md-11" style="background-color:azure; margin-top:20px;">


            		</pre>
    </div>
</template>

<script>

module.exports = {
    mounted() {
        console.log('Component mounted.')
        let t = function (p) {


        }
        var myp5 = new p5(t, 'c2');
        }
}
</script>
