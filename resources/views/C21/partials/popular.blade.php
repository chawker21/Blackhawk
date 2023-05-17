<!-- post wraper start-->
<section class="block-wrapper">
    <div class="container">
        <div class="row">
            @include('C21/partials/sidebar_bannerad')
            <!-- col end -->
            <div class="col-lg-9 col-md-8">
                <div class="ts-grid-box most-populer-item">
                    <h2 class="ts-title">Most Popular</h2>

                    <div class="most-populers owl-carousel">
                        @foreach($popular as $popular)
                        <div class="item">



                            <a class="post-cat ts-orange-bg" href="#">{{$popular->type}}</a>
                            <div class="ts-post-thumb">
                                <a href="#">
                                    <img class="img-fluid" src="{{asset($popular->img)}}" alt="">
                                </a>
                            </div>
                            <div class="post-content">
                                <h3 class="post-title">
                                    <a href="{{$popular->link}}">{{$popular->description}}</a>
                                </h3>
                                <span class="post-date-info">
										<i class="fa fa-clock-o"></i>
										March 21, 2019
									</span>
                            </div>


                        </div>

                        @endforeach
                        <!-- ts-grid-box end-->
                    </div>
                    <!-- most-populers end-->
                </div>
                <!-- ts-populer-post-box end-->
            </div>
            <!-- col end-->
        </div>
        <!-- row end-->
    </div>
    <!-- container end-->
</section>
<!-- post wraper end-->