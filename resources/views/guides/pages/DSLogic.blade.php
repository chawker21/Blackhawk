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
                            <div class="panel-heading">DS Logic Analyzer</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>connect Logic analyzer to computer and open DSView in program files</p>
                                    <a href="https://www.dreamsourcelab.com/download/">DSVIEW download</a>
                                    <p></p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/analyzer2.jpg") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>in DSView you should see DSLogic Basic as the selected analyzer</p>
                                    <div class="card " style="width: 100%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView2.jpg") }}" alt="Card image cap">
                                    </div>

                                    <p>Hook the black wire from the channel collection of wires to the ground of the component to be tested, in this case a nano.</p>
                                    <p>Hook one of the other wires to the TX pin of the component</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView_hookup.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>click on the options to select operation mode and channels</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView_options.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>in this case, channel 0 is the one bieng used, the other channels are optional.</p>
                                    <p>select the time to capture data and the frequency, the less channels selected the higher frequency you can select.</p>
                                    <div class="card " style="width: 100%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView3.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>plug component to power and then press start, this will capture the initial data from the TX line.</p>
                                    <p>you may have to zoom in or out on the timeline to see the data, center on the data and zoom in to see the transmission</p>
                                    <div class="card " style="width: 100%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView_tx.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p> next select the decode button which will open a panel on the right side.  click the + sign to add a new protocol, this will open a decoder options box.</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView_decoder.jpg") }}" alt="Card image cap">
                                    </div>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView_decoder2.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>in the decoder options, select the UART transceive line, should be channel 0 in this case, and also check the Baud rate for the correct speed.  Also check the data format, ascii will give a printout of the letters.</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView_decoder3.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>select ok and it should decode the transmission</p>
                                    <div class="card " style="width: 100%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/DSLogic/DSView_decoder4.jpg") }}" alt="Card image cap">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection
