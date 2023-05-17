@extends('/guides/layouts.app')

                @section('content')
                    @include('guides.partials._profile')
                    {{--@include('partials.aside')--}}
                    <div class="container">
                        <div class="row text-center">
                            <div class="col-md-8">

                                <div class="panel panel-default">
                                    <div class="panel-heading"><h1>Create Debian Linux Mirco SD for Pi Zero</h1></div>
                                    <div id="test" class="panel-body">

<p> Open a Command Window (cmd)
    Enter diskpart
    Enter list disk (it is important you KNOW which disk is the USB key you are formatting)
    Enter select disk x where x is your USB key
    Enter clean
    Enter create part primary
    Enter select part 1
    Enter active
    Enter format fs=fat32 label="</p>


                                        <div class="card" style="width: 18rem;">

                                            <img class="card-img-top" src="{{asset("/guide_resources/assets/img/SDcard/microdisk.jpg") }}" alt="Card image cap">
                                                <p class="card-text">Insert card into adapter.</p>

                                        </div>
                                        <br>
                                        <p>To get started you need to install an operating system onto the MicroSD.  Specifically a Raspian Linux OS.
                                        This Link downloads the latest Raspian dist from raspberrypi.org.</p>
                                        <a href="https://www.raspberrypi.org/downloads/raspbian/" class="btn btn-large btn-block btn-primary" target="_blank" type="button">Download Latest Raspbian</a>

                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/Rasp.jpg") }}" alt="Card image cap">
                                            <p>You should see this.  Choose the Desktop version or CLI.  I prefer linux for the CLI</p>

                                        <p>Save the file and unzip it (if your using etcher you dont have to unzip it, it will use a zip file, it should be about 4.5 GB</p>

                                        <div class="card" style="width: 18rem;">
                                            <img class="card-img-top" src="{{asset("/guide_resources/assets/img/SDcard/SDcomp.jpg") }}" alt="Card image cap">
                                            <p class="card-text">Insert card into computer.</p>
                                        </div>

                                        <p>The best way to copy the img to the SD card is using Etcher from etcher.io This link takes you to the download page of the latest version if its not already installed.</p>
<br>
                                        <a href="https://etcher.io/" class="btn btn-large btn-block btn-primary" target="_self" type="button">Download Etcher</a>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/etcher.jpg") }}" alt="Card image cap">

                                        <p>Next run etcher and select the img you just downloaded, zip format is ok, then chose the Drive and Flash.  It will take about 6 minutes.</p>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/etcher3.jpg") }}" alt="Card image cap">
                                        <p>after the flash is complete you likely need to remove the USB and reinsert.  After reinserting the USB you should see the Drive labeled boot.</p>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/boot.jpg") }}" alt="Card image cap">
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/boot2.jpg") }}" alt="Card image cap">

                                        <h2>Setting up the Boot disk to connect to Wifi for SSH</h2>

                                        <p>before installing the micro disk into the pi zero, we will set up the wifi so you can SSH into it from the first boot.  <br>
                                        there are 3 files you will need to create or edit. <br>
                                        wpa_supplicant.conf - this is where the wifi interface information is stored.<br>
                                        config.txt - this will need a setting added to it.<br>
                                        ssh - this enables ssh <br>
                                        <br>
                                        Editing these now makes it easier to just SSH directly.</p>

                                        <h3>Configure Wifi Settings</h3>
                                        <p>ive noticed the wpa_supplicant file gets put in a wpa_supplicant folder, so create the folder wpa_supplicant.</p>
                                        <p>Create a text file named wpa_supplicant.conf</p>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/wpa.jpg") }}" alt="Card image cap">

                                        <br>
                                        <h2>Enable UART</h2>
                                        <p>Next edit the config.txt by opening the file from the boot disk into wordpad (wordpad will show it formated)</p>
                                        <p> add the following two lines to the end of the page</p><br>
                                        <p>#enable UART</p>
                                        <p>enable_uart=1</p>
                                        <p>Save the file to the boot disk</p>
                                        <br>
                                        <h2>Enable SSH</h2>
                                        <p>Simply create a txt file named ssh and put it in the boot folder.</p>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/ssh.jpg") }}" alt="Card image cap">
                                        <h2>Insert Micro disk into Pi Zero</h2>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/pizero.jpg") }}" alt="Card image cap">
                                        <p>if it did not connect to the wifi, additional steps require booting into pi with monitor and keyboard.</p>
                                        <p> first open terminal and type...</p>
                                        <p>sudo nano /etc/wpa_supplicant/wpa_supplicant.conf</p>
                                        <p>edit file to look like this</p>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/wpa2.jpg") }}" alt="Card image cap">
                                        <br>
                                        <p>next go to</p>
                                        <p>sudo nano /etc/network/interfaces</p>
                                        <p>and enter the following</p>
                                        <img class="card-img-height" src="{{asset("/guide_resources/assets/img/SDcard/interfaces.jpg") }}" alt="Card image cap">
                                        <p>sudo systemctl disable dhcpcd.service<br>
                                            sudo systemctl reboot</p>

                                        <p>sudo reboot and you should connect and be able to SSH into terminal.</p>
                                        <hr>
                                        <a href="Lampinstall" class="btn btn-large btn-block btn-primary" target="_blank" type="button">continue to installing Lamp Server</a>
                                        <hr>


                                    </div>
                                </div>
                            </div>
                        </div>
        @endsection