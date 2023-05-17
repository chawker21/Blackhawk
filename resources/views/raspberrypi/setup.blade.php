@extends('layouts.app')

@section('content')
    @include('guides.partials._profile')
    {{--@include('partials.aside')--}}
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">My Setup for rasbian</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>sudo apt-get update && upgrade -y</p>
                                    <p>some python libraries needed for 3.7 if you choose to install that.  https://gist.github.com/SeppPenner/6a5a30ebc8f79936fa136c524417761d</p>
                                    <p>sudo apt-get install build-essential tk-dev libncurses5-dev libncursesw5-dev libreadline6-dev libdb5.3-dev libgdbm-dev libsqlite3-dev libssl-dev libbz2-dev libexpat1-dev liblzma-dev zlib1g-dev libffi-dev -y</p>
                                    <p>install python3 and pip - </p>
                                    <p>sudo apt-get install python3-pip</p>
                                    <p>install git -</p>
                                    <p>sudo apt-get install git</p>

                                    <p>Check USB Antennae if equipped</p>
                                    <p>lsusb</p>
                                    <p>Check whether or not the Antennae is bieng picked up running lsusb</p>
                                    <p>Run lsmod to see if the module for the stick is loaded</p>
                                    <p>Run ifconfig -a and you should see wlan0</p>



                                </div>
                            </div>
                    </ul>
                    </li>
                </div>

            </div>
        </div>
    </div>
@endsection