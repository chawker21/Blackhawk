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
                        <div class="panel-heading">PyShark</div>
                        <div id="test" class="panel-body">
                            <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                <p>pyshark basics</p>
                                <video width="720" height="480px" controls>
                                    <source src="{{asset("/guide_resources/assets/video/pyshark/pysharkbasics.mp4")}}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <p>scapy basics</p>
                                <video width="720" height="480px" controls>
                                    <source src="{{asset("/guide_resources/assets/video/pyshark/scapyintro.mp4")}}"
                                            type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                               <h3> either read from a capture file or sniff from a liveCapture</h3>

                                <p>import pyshark<br>
                                                        <br>
                                    import pyshark<br>
                                    cap = pyshark.FileCapture('/tmp/mycapture.cap')<br>
                                    cap<br>
                                    <br>
                                    if 'IP' in packet:<br>
                                    # print(packet.ip.src)<br>
                                    # print(pkt.frame_info )<br>
                                    # print(packet.ip.field_names)<br>
                                    print(pkt.captured_length)<br>
                                    print(pkt.eth )<br>
                                    print( pkt.highest_layer )<br>
                                    print(pkt.http)<br>
                                    print(pkt.interface_captured)<br>
                                    print(pkt.ip)<br>
                                    print(pkt.layers)<br>
                                    print(pkt.length)<br>
                                    print(pkt.pretty_print)<br>
                                    print(pkt.sniff_time)<br>
                                    print(pkt.sniff_timestamp)<br>
                                    print( pkt.transport_layer)<br>

                                    print(pkt.udp)<br>
                                    print(pkt.length)<br>
                                    print(pkt.pretty_print)<br>
                                    print(pkt.sniff_time)<br>
                                    print(pkt.sniff_timestamp)<br>
                                    print( pkt.transport_layer)<br>

                               </p>

                            </div>
                        </div>
                </ul>
                </li>
            </div>

        </div>
    </div>
    @endsection
