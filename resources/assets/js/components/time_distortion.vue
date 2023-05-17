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
          chris = p.loadImage("H:\\wamp\\www\\Blackhawk\\public\\guide_resources\\assets\\img\\Chris.jpg");
      };



        p.setup = function () {
          p.createCanvas(400, 400);

      };

        p.draw = function () {
        background(220);
        p.image(chris, 0, 0, width, height);

        for (let i = 0; i < chris.width; i++) {
          for (let j = 0; j < chris.height; j++) {
            let pixelIndex = (i + j * chris.width) * 4;
            let r = chris.pixels[pixelIndex +0];
            let g = chris.pixels[pixelIndex + 1];
            let b = chris.pixels[pixelIndex + 2];
            let avg = (r + g + b) /3;

            noStroke();
            fill(avg);
            text('C', i * w, j * h);
          }
        }

        };
      }
        var myp5 = new p5(t, 'c3');

      }
}
</script>

<style scoped>

</style>