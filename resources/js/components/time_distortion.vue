<template>
  <div class="container">
    <div class="panel-heading" style="font-size:20px;">Earthquake Data for past 30 days</div>
    <hr>
    <div id="c3" class="panel">
      <a href="https://P5js.org">P5</a> /
      <a href="https://www.youtube.com/watch?v=55iwMYv8tGI">Coding Train</a>
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
        let density = 'Ñ@#W$9876543210?!abc;:+=-,._ ';
        let chris;
        p.preload = function () {
          p.chris = p.loadImage("H://wamp/www/Blackhawk/public/guide_resources/assets/img/Chris.jpg");
      };
        p.setup = function () {
          p.createCanvas(400, 400);
      };
        p.draw = function () {
          p.background(220);
          let w = p.width / p.chris.width;
          let h = p.height / p.chris.height;
          p.chris.loadPixels();
          for (let i = 0; i < p.chris.width; i++) {
            for (let j = 0; j < p.chris.height; j++) {
              let pixelIndex = (i + j * p.chris.width) * 4;
              let r = p.chris.pixels[pixelIndex + 0];
              let g = p.chris.pixels[pixelIndex + 1];
              let b = p.chris.pixels[pixelIndex + 2];
              let avg = (r + g + b) / 3;
              p.noStroke();
              p.fill(255);
              let len = p.density.length;
              let charIndex = p.floor(p.map(avg, 0, 255, len, 0));
              p.textSize(w);
              p.textAlign(p.CENTER, p.CENTER);
              p.text(p.density.charAt(charIndex), i * w + w * 0.5, j * h + h * 0.5);
            }
          }
        }
        };

        var myp5 = new p5(t, 'c3');

      }
}
</script>

