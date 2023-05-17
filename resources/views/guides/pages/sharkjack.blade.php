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
                            <div class="panel-heading">Shark Jack</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>connect sharkjack to kali pi</p>
                                    <p>do ifconfig to verify it is connected, you are looking for a 172.16.24.### ip address</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/sharkjack/ifconfig.jpg") }}" alt="Card image cap">
                                    </div>
                                    <hr>
                                    <p>type ssh root@172.16.24.1</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        ssh root@172.16.24.1
                                    </div>
                                    <p>password is hak5shark</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/sharkjack/ssh.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>ls shows a VERSION loot and payload directory, will only show VERSION and payload after updating firmware.</p>
                                    <p>cd payload then ls</p>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/sharkjack/ls.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>can use vi payload.sh to edit payload in payload folder</p>

                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        vi payload.sh
                                    </div>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/sharkjack/payload.sh.jpg") }}" alt="Card image cap">
                                    </div>
                                    <p>in the kali box go to the loot sharkjack folder, this is the folder for updates, payloads, loot, and the sharkjack.sh tools which is an executable
                                    </p>

                                    <p>this will download files in the loot folder in the hak5shark to the kali pi</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        scp -r root@172.16.24.1:/root/loot/* .
                                    </div>

                                    <p>to upload a payload use this command</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        scp payload.sh root@172.16.24.1:/root/payload/
                                    </div>

                                    <p>assuming you have a payload.sh file to upload in current directory</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        cd sharkjack
                                    </div>
                                    <p>to run the tools:</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        ./sharkjack.sh to enter tools
                                    </div>
                                    <div class="card " style="width: 50%;">
                                        <img class="card-img-top" src="{{asset("/guide_resources/assets/img/sharkjack/sharkjack.sh.jpg") }}" alt="Card image cap">
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
