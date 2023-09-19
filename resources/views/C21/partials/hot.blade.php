<!-- post wraper start-->
<section class="block-wrapper mb-30 hot-topics-heighlight">
    <div class="container">

        <div class="ts-grid-box">
            <h2 class="ts-title">Hot Topics</h2>

            <div class="owl-carousel" id="hot-topics-slider">
                @foreach($hot as $hot)
                <div class="item ts-blue-light-heighlight heighlight">
                    <div class="ts-post-thumb">

                        <a href="#">
                            <img class="img-fluid" src="{{$hot->img}}" alt="">
                        </a>
                        <a class="post-cat" href="#">{{$hot->type}}</a>
                    </div>

                    <div class="post-content">

                        <h3 class="post-title">
                            <a href="#">{{$hot->description}}</a>
                        </h3>
                        <span class="post-date-info">
								<i class="fa fa-clock-o"></i>
								March 21, 2019
							</span>
                    </div>
                </div>
                <!-- ts-grid-box end-->
@endforeach
            </div>
            <!-- most-populers end-->
        </div>
        <!-- ts-populer-post-box end-->
    </div>
    <!-- container end-->
</section>
<!-- post wraper end-->