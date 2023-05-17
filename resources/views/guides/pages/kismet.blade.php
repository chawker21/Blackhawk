@extends('Kali.layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="card-header"><h2>Using Kismet</h2></div>
                    <div id="test" class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-primary border-dark">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>Kismet will automatically put antennae into monitor mode... wlan1mon...  you can check this using iwconfig</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        iwconfig
                                    </div>
                                    <p>if kismet does not put antennae into monitor mode follow these steps</p>
                                    <h1>Step 1: check your wireless network interfaces and create a monitor mode one</h1>
                                    <p>You can check that you have two wireless network interfaces (the one embedded in your Pi and the USB adapter one) in Managed Mode with the command:</p>
                                    <pre class="brush: bash; title: ; notranslate" title="">
iwconfig
</pre>
                                    <p>Now, let&#8217;s create a monitor mode interface, mon1, with the command:</p>
                                    <pre class="brush: bash; title: ; notranslate" title="">
sudo iw phy phy1 interface add mon1 type monitor
</pre>
                                    <p>You can check with <em>iwconfig</em> or also:</p>
                                    <pre class="brush: bash; title: ; notranslate" title="">
iw dev
</pre>
                                    <p><img class="aligncenter wp-image-3929 " src="https://behindthesciences.com/wp-content/uploads/2018/09/1_interfaces_adapter.jpg" alt="" width="557" height="766" srcset="https://behindthesciences.com/wp-content/uploads/2018/09/1_interfaces_adapter.jpg 638w, https://behindthesciences.com/wp-content/uploads/2018/09/1_interfaces_adapter-218x300.jpg 218w, https://behindthesciences.com/wp-content/uploads/2018/09/1_interfaces_adapter-600x825.jpg 600w" sizes="(max-width: 557px) 100vw, 557px" pagespeed_url_hash="1639913937" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></p>
                                    <p>If this doesn&#8217;t work, make sure your interfaces support monitor mode with the command:</p>
                                    <pre class="brush: bash; title: ; notranslate" title="">
iw phy phy1 info
</pre>
                                    <p><img class="aligncenter wp-image-3930 size-full" src="https://behindthesciences.com/wp-content/uploads/2018/09/2_monitor_mode.jpg" alt="" width="633" height="769" srcset="https://behindthesciences.com/wp-content/uploads/2018/09/2_monitor_mode.jpg 633w, https://behindthesciences.com/wp-content/uploads/2018/09/2_monitor_mode-247x300.jpg 247w, https://behindthesciences.com/wp-content/uploads/2018/09/2_monitor_mode-600x729.jpg 600w" sizes="(max-width: 633px) 100vw, 633px" pagespeed_url_hash="2990810070" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></p>
                                    <h1></h1>
                                    <h1>Step 2: edit the interfaces file</h1>
                                    <p>If you type <em>sudo nano /etc/network/interfaces</em> , you will be able to edir your interfaces configuration file.</p>
                                    <p>Now, add all the commands you see in the following picture:</p>
                                    <p><img class="aligncenter wp-image-3931 size-full" src="https://behindthesciences.com/wp-content/uploads/2018/09/3_editing_interfaces_file.jpg" alt="" width="642" height="397" srcset="https://behindthesciences.com/wp-content/uploads/2018/09/3_editing_interfaces_file.jpg 642w, https://behindthesciences.com/wp-content/uploads/2018/09/3_editing_interfaces_file-300x186.jpg 300w, https://behindthesciences.com/wp-content/uploads/2018/09/3_editing_interfaces_file-600x371.jpg 600w" sizes="(max-width: 642px) 100vw, 642px" pagespeed_url_hash="2078679695" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></p>
                                    <p>This will set up each of your network interfaces to work in the mode you like. If you now check your interfaces, you can see this:</p>
                                    <p><img class="aligncenter wp-image-3932 size-full" src="https://behindthesciences.com/wp-content/uploads/2018/09/4_check_interfaces.jpg" alt="" width="635" height="272" srcset="https://behindthesciences.com/wp-content/uploads/2018/09/4_check_interfaces.jpg 635w, https://behindthesciences.com/wp-content/uploads/2018/09/4_check_interfaces-300x129.jpg 300w, https://behindthesciences.com/wp-content/uploads/2018/09/4_check_interfaces-600x257.jpg 600w" sizes="(max-width: 635px) 100vw, 635px" pagespeed_url_hash="10104389" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></p>
                                    <p>Now it&#8217;s time to reboot your Pi!</p>
                                    <h1>Step 3: Setting up your interfaces</h1>
                                    <p>You don&#8217;t need to do this, but if you want, you can set the frequency and the channel you want to monitor with the commands:</p>
                                    <pre class="brush: bash; title: ; notranslate" title="">
sudo iw dev mon1 set freq 2437
sudo iwconfig mon1 channel 6
</pre>
                                    <p>and check using:</p>
                                    <pre class="brush: bash; title: ; notranslate" title="">
iw dev
</pre>
                                    <p>Now, it&#8217;s time to sniff some packets!</p>
                                    <h1>Step 4: install Aircarck-ng</h1>
                                    <p>Aircrack-ng is a suite of tools designed to evaluate WiFi network security. It includes airodump-ng that, as we saw in previous posts on this section, it&#8217;s a tool to sniff packets.</p>
                                    <p>We followed <a href="https://www.thepolyglotdeveloper.com/2018/06/crack-wireless-passwords-raspberry-pi-aircrack/">this simple and updated tutorial</a> to install it.</p>
                                    <h1>Step 5: start using your monitor mode interface</h1>
                                    <p>Once you are here, you can start sniffing packets in monitor mode using airodump-ng and your brand new monitor mode interface, mon1:</p>
                                    <p><img class="aligncenter wp-image-3936 size-full" src="https://behindthesciences.com/wp-content/uploads/2018/09/7_sniffing_monitor_mode.jpg" alt="" width="644" height="468" srcset="https://behindthesciences.com/wp-content/uploads/2018/09/7_sniffing_monitor_mode.jpg 644w, https://behindthesciences.com/wp-content/uploads/2018/09/7_sniffing_monitor_mode-300x218.jpg 300w, https://behindthesciences.com/wp-content/uploads/2018/09/7_sniffing_monitor_mode-600x436.jpg 600w" sizes="(max-width: 644px) 100vw, 644px" pagespeed_url_hash="771690996" onload="pagespeed.CriticalImages.checkImageForCriticality(this);"/></p>
                                    <p>If you want to save the pcap file, just type:</p>
                                    <pre class="brush: bash; title: ; notranslate" title="">
airodump-ng -w capture.pcap mon1
</pre>
                                    <p>And now you are ready to play with it 🙂</p>
                                    <p>Run Kismet with the command kismet and define antennae in monitor mode using the -c tac</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        kismet -c wlan1mon
                                    </div>
                                    <img src="{{asset("guide_resources/assets/img/kismet/start.JPG")}}" alt="kismet_start" height="678" width="468">
                                    <p>This Starts a Server on the Linux localhost on port 2501.  The kali box ip address should port foward to port 2501 in order to access on LAN.  This is done in the router.</p>
                                    <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                                        <a href="http://192.168.1.22:2501">http://192.168.1.22:2501</a>
                                    </div>
                                    <img src="{{asset("guide_resources/assets/img/kismet/rootwarning.JPG")}}" alt="kismet_start" height="140" width="700">
                                </div>

                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>configuration files are found in the /usr/local/etc/ folder</p>
                                    <img src="{{asset("guide_resources/assets/img/kismet/confloaded.JPG")}}" alt="kismet_start" height="200" width="750"><hr>
                                    <img src="{{asset("guide_resources/assets/img/kismet/conf.JPG")}}" alt="kismet_start" height="80" width="750">
                                </div>

                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection