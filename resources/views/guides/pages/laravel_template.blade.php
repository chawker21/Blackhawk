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
                            <div class="panel-heading">Basic Template</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">

                                    <p>to embed an image</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/sharkjack/ssh.jpg") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>to embed a line of code</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        scp payload.sh root@172.16.24.1:/root/payload/
                                    </div>
                                    <hr>
                                    <p>to embed a local video:</p>
                                    <video width="720" height="480px" controls>
                                        <source src="{{asset("/guide_resources/assets/video/firmware/firmware_binwalk.mp4")}}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>


                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                </div>

            </div>
        </div>
@endsection

