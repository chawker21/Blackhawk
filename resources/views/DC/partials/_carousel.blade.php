
<div >
    <div class="container" >
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src='/DC_resources/assets/img/WashDC/{{$page->title}}/{{$page->title}}.jpg' class='img-responsive img-center' alt="...">
                </div>
                @foreach($img as $img)
                <div class="carousel-item">
                    <img src="/DC_resources/assets/img/WashDC/{{$page->title}}/{{$img->title}}" class='img-responsive img-center' alt="...">
                </div>
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
