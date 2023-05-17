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
                            <div class="panel-heading">Unity Grab Object with Touch Controllers</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    <p>Settings for OVRPlayerController</p>
                                    <div class="card " style="width: 50%;">
                                        <p>Add Capsule Collider</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/UnityPlayerControllerGrabObject.png") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Settings for Left Hand</p>
                                    <div class="card " style="width: 50%;">
                                        <p>add Rigid body, uncheck Gravity, Check is Kinematic, Add Collider, check isTrigger, set Radius to .05, Add OVRGrabber Script, Set Hand Anchor to Grip Transform
                                            Set Grab Volume to 1 and Add Collider to Element 0, Set Controller to Controller</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/UnityLeftHandAnchorGrabObject.png") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Settings for Right Hand</p>
                                    <div class="card " style="width: 50%;">
                                        <p>add Rigid body, uncheck Gravity, Check is Kinematic, Add Collider, check isTrigger, set Radius to .05, Add OVRGrabber Script, Set Hand Anchor to Grip Transform
                                            Set Grab Volume to 1 and Add Collider to Element 0, Set Controller to Controller</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/UnityRightHandAnchorGrabObject.png") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Settings for Grabbable Object</p>
                                    <div class="card " style="width: 50%;">
                                        <p> Make sure Rigid Body, Grabbable Script and Box Collider are present, Set Grab Points to 1 and Element 0 to Collider, Set Gravity on and isKinimatic.</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/UnityObjectGrabObject.png") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>Settings for OVRPlayerControllerTree</p>
                                    <div class="card " style="width: 50%;">
                                        <p>Add LocalAvatar as Child to Tracking Space</p>
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/Unity/UnityPlayerControllerTreeGrabObject.png") }}" alt="Card image cap">
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