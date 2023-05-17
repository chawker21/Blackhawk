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
				function (p) {
let mapimg;
let clat = 0;
let clon = 0;
let lat = 60.8863;
let lon = -150.8272;
let zoom = 1;
let earthquakes;
p.preload = function () {
p.mapimg = p.loadImage('https://api.mapbox.com/styles/v1/mapbox/dark-v9/static/0,0,1,0,0/1024x512?access_token=');
p.earthquakes = p.loadStrings("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_month.csv");
};
p.mercX = function (lon) {
lon = p.radians(lon);
let a = (256 / p.PI) * p.pow(2, zoom);
let b = lon + p.PI;
return a * b;
};
p.mercY = function (lat) {
lat = p.radians(lat);
let a = (256 / p.PI) * p.pow(2, zoom);
let b = p.tan(p.PI / 4 + lat / 2);
let c = p.PI - p.log(b);
return a * c;
};
p.setup = function () {
p.createCanvas(1024, 512);
p.translate(p.width / 2, p.height / 2);
p.imageMode(p.CENTER);
p.image(p.mapimg, 0, 0);
let cx = p.mercX(clon);
let cy = p.mercY(clat);
for (let i = 0; i &lt p.earthquakes.length; i++) {
let data = p.earthquakes[i].split(',');
let lat = data[1];
let lon = data[2];
let mag = data[4];
let x = p.mercX(lon) - cx;
let y = p.mercY(lat) - cy;
mag = p.pow(mag , 10);
mag = p.sqrt(mag);
let magmax = p.sqrt(p.pow(10, 10));
let d = p.map(mag, 0, magmax, 0, 180);
//				let d = p.map(.3, 0, 10, 0, 180);
p.stroke(255, 0, 255);
p.fill(255, 0, 255, 200);
p.ellipse(x, y, d, d);
}
}
};

			</pre>
    </div>
</template>

<script>
module.exports = {
    mounted() {
        console.log('Component mounted.')
        let t = function (p) {
            let mapimg;
            let clat = 0;
            let clon = 0;
            let lat = 60.8863;
            let lon = -150.8272;
            let zoom = 1;
            let earthquakes;
            p.preload = function () {
                p.mapimg = p.loadImage('https://api.mapbox.com/styles/v1/mapbox/dark-v9/static/0,0,1,0,0/1024x512?access_token=pk.eyJ1IjoiY2hhd2tlcjIxIiwiYSI6ImNqOXgycWEybDdzYTEzM2xnNG01N2Y5d2UifQ.YMghCTUA1p131erg3_Ln_Q');
                p.earthquakes = p.loadStrings("https://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/all_month.csv");
            };
            p.mercX = function (lon) {
                lon = p.radians(lon);
                let a = (256 / p.PI) * p.pow(2, zoom);
                let b = lon + p.PI;
                return a * b;
            };
            p.mercY = function (lat) {
                lat = p.radians(lat);
                let a = (256 / p.PI) * p.pow(2, zoom);
                let b = p.tan(p.PI / 4 + lat / 2);
                let c = p.PI - p.log(b);
                return a * c;
            };
            p.setup = function () {
                p.createCanvas(1024, 512);
                p.translate(p.width / 2, p.height / 2);
                p.imageMode(p.CENTER);
                p.image(p.mapimg, 0, 0);
                let cx = p.mercX(clon);
                let cy = p.mercY(clat);
                for (let i = 0; i < p.earthquakes.length; i++) {
                    let data = p.earthquakes[i].split(',');
                    let lat = data[1];
                    let lon = data[2];
                    let mag = data[4];
                    let x = p.mercX(lon) - cx;
                    let y = p.mercY(lat) - cy;
                    mag = p.pow(mag , 10);
                    mag = p.sqrt(mag);
                    let magmax = p.sqrt(p.pow(10, 10));
                    let d = p.map(mag, 0, magmax, 0, 180);
                    p.stroke(255, 0, 255);
                    p.fill(255, 0, 255, 200);
                    p.ellipse(x, y, d, d);
                }
            }
        };
        var myp5 = new p5(t, 'c2');
    }
}
</script>
