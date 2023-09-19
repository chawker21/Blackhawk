<div class="widgets ts-grid-box widgets-populer-post">
    <div class="topic-list">
        hot Topics
    </div>
    @foreach($hot2 as $hot2)
    <div class="ts-overlay-style">

            @if($hot2->hot2main == true)
        <div class="item">
            <div class="ts-post-thumb">
                <a href="#">
                    <img class="img-fluid" src="{{$hot2->internal}}" alt="">
                </a>
            </div>
            <div class="overlay-post-content">
                <div class="post-content">
                    <h3 class="post-title">
                        <a href="#">{{$hot2->description}}</a>
                    </h3>
                    <span class="post-date-info">
												<i class="fa fa-clock-o"></i>
												March 21, 2019
											</span>
                </div>
            </div>
        </div>
    </div>
    @elseif($hot2->hot2main == false)
    <!-- ts-overlay-style  end-->

    <div class="post-content media">
        <img class="d-flex sidebar-img" src="{{$hot2->img}}" alt="">
        <div class="media-body align-self-center">
            <h4 class="post-title">
                <a href="">{{$hot2->title}}</a>
            </h4>
        </div>
    </div>
    @endif
    <!-- post content end-->
@endforeach
</div>