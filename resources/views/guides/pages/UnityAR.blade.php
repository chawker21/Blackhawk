
@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Unity AR Foundation Toolkit Setup</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    <p>Packages to install</p>
                                    <p>AR Foundation</p>
                                    <p>XR Management</p>
                                    <p>ARKit XR Plugin</p>
                                    <p>XR Interaction Toolkit</p>
                                    <div class="card " style="width: 50%;">
                                        <p>AR Foundation</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg1.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <div class="card " style="width: 50%;">
                                        <p>XR Management</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg2.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <div class="card " style="width: 50%;">
                                        <p>ARKit XR Plugin</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg3.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <div class="card " style="width: 50%;">
                                        <p>XR Interaction Toolkit</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg4.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Create XR / AR Gesture interactor</p>
                                    <div class="card " style="width: 50%;">
                                        <p>Gesture Interacture, in the XR menu of create item.</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg5.JPG") }}" alt="Card image cap">
                                        <p>Creates a XR Interaction Manager, AR Session Origin with an AR Camera.</p>
                                        <p>Tag Camera as main Camera.</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg5b.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Create AR Placement Interactable</p>
                                    <div class="card " style="width: 50%;">
                                        <p>AR Placement Interacteable works with the Interaction Manager, this has a slot for a placement prefab that will be used to place objects on surfaces.</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg7.JPG") }}" alt="Card image cap">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg8.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Prefab Cube</p>
                                    <div class="card " style="width: 50%;">
                                        <p>Create a cube with a transparent material and set Emission to on. Use Prefab Cube in the placement Prefab slot in the AR Placement Interactable
                                        </p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg9.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Create Empty Game Object and Rename to AR Plane Visualizer</p>
                                    <div class="card " style="width: 50%;">
                                        <p>Add AR Plane, AR Plane Mesh Visualizer, Mesh Collider, Mesh Filter, Mesh Renderer and add a Transparent Material (Plane Material)</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg10.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>

                                    <div class="card " style="width: 50%;">
                                        <p>Add Line Renderer to AR Plane Visualizer, reduce width to .005, Tolerance to .25 and corner Vertices and End Cap Vertices to 4</p>
                                        <p>Add Line Material, Transparent Emisssive to Line Renderer Material</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/ARimg11.JPG") }}" alt="Card image cap">
                                    </div>
                                    <hr>



                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection