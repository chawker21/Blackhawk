@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Basic Template</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <iframe src="https://myhub.autodesk360.com/ue2d97bbd/shares/public/SH7f1edQT22b515c761e551d9ba99fbc5daa?mode=embed" width="640" height="480" allowfullscreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"  frameborder="0"></iframe>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/editablePoly.JPG") }}" alt="Card image cap">
                                    <p class="card-text">1. Convert Object to a Editable Poly.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/Edge.jpg") }}" alt="Card image cap">
                                    <p class="card-text">2. Select the Edge option in the selection panel.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/segments.jpg") }}" alt="Card image cap">
                                    <p class="card-text">3. double click the segments on the cap sections holding control to select multiple segments.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/delsegments.jpg") }}" alt="Card image cap">
                                    <p class="card-text">4. After selecting segments hold control and push backspace to remove them.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/vertices.jpg") }}" alt="Card image cap">
                                    <p class="card-text">5. Select the Vertices in the Selection Menu.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/vertices2.jpg") }}" alt="Card image cap">
                                    <p class="card-text">6. Select the Vertices on the object to stretch.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/verticesstretch.jpg") }}" alt="Card image cap">
                                    <p class="card-text">7. Stretch the object out to make an oval.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/oval.jpg") }}" alt="Card image cap">
                                    <p class="card-text">7. Stretch both sides out equally.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval1.jpg") }}" alt="Card image cap">
                                    <p class="card-text">8. Create a second cylinder inside the first oval.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval2.jpg") }}" alt="Card image cap">
                                    <p class="card-text">9. repeat the process of double clicking the center segments holding control and pushing backspace.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval3.jpg") }}" alt="Card image cap">
                                    <p class="card-text">10. Stretch the second Cylinder by selecting the vertices and dragging it to have a desired thickness between the outer and inner cylinders</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval4.jpg") }}" alt="Card image cap">
                                    <p class="card-text">11. Follow the same process stretching the opposite side</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval5.jpg") }}" alt="Card image cap">
                                    <p class="card-text">12.  Select the original Cylinder.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval6.jpg") }}" alt="Card image cap">
                                    <p class="card-text">13.  From the create menu choose Compound and ProBoolean.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval7.jpg") }}" alt="Card image cap">
                                    <p class="card-text">14. In the advanced options Planar edge removal select Remove Only Invisible.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval8.jpg") }}" alt="Card image cap">
                                    <p class="card-text">15. Next Select Start Picking.</p>
                                    <img class="card-img-height" src="{{asset("/guide_resources/assets/img/3DSMax/secondoval9.jpg") }}" alt="Card image cap">
                                    <p class="card-text">16. click the inner Cylinder and it removes it leaving a double sided oval.</p>
                                    <iframe width="560" height="315" src="https://www.youtube.com/embed/fg4qE6jAogk" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>


                                </div>
                            </div>
                    </ul>
                    </li>
                </div>

            </div>
        </div>
@endsection