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
                            <div class="panel-heading">Monitor mode in Kali Linux Operating System</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <h3>Install driver for monitor mode</h3>
                                    <h4> step 1</h4>
                                    <h4>always update</h4>
                                    <ul><li>
                                            apt-get update && apt-get upgrade</li>
                                        <li> apt-get dist-upgrade</li>
                                        <li>reboot now</li></ul>

                                    <h4>Check for old driver</h4>
                                   <ul><li>apt remove realtek-rtl88xxau-dkms && apt purge realtek-rtl88xxau-dkms</li>
                                        <li>apt autoremove && apt autoclean</li></ul>

                                    <p>2017-12-14</p>
                                    <ul><li> git clone https://github.com/kimocoder/rtl8812au</li>
                                        <li>  cd rtl8812au</li>
                                        <li>  make && make install</li>

                                        <li> ip link set wlan0 down</li>
                                        <li>  iwconfig wlan0 mode monitor</li>
                                        <li>   ip link set wlan0 up</li>

                                        <li>   airodump-ng -i wlan0</li></ul>


                                </div>
                            </div>
                        </li>
                    </ul>

                </div>
            </div>
            </div>
        </div>
@endsection

