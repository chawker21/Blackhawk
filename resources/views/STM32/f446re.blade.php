@extends('STM32.layouts.app')

@section('content')

    {{--@include('guides.partials._profile')--}}
    {{--@include('partials.aside')--}}

    <div class="container-fluid col-md-8">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Stem32f446re</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <img class="card-img-top"
                                         style="max-height:400px; max-width:350px; margin-left:400px;"
                                         src="{{asset("/STM32_resources/nucleoboard.bmp") }}" alt="f446re_pinout_2">

                                    <ul>

                                        <p>Links to various resources for the STM32f446re</p>
                                        <li>
                                            <a href="https://www.st.com/en/development-tools/flasher-stm32.html">FLASHER-STM32</a>
                                            <p>The STM32 Flash loader demonstrator (FLASHER-STM32) is a free software PC
                                                utility from STMicroelectronics, which runs on Microsoft® OSs and
                                                communicates through the RS232 with the STM32 system memory bootloader.
                                                To get an example of how to execute the device bootloader, refer to the
                                                STM32 microcontroller system memory boot mode Application note (AN2606).
                                                To get information about the USART protocol used in the STM32
                                                bootloader, refer to the USART protocol used in the STM32 bootloader
                                                Application note (AN3155). </p>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="https://www.st.com/en/development-tools/stsw-link009.html">USB
                                                driver - STSW-LINK009</a>
                                        </li>
                                        <p>This USB driver (STSW-LINK009) is for ST-LINK/V2 and ST-LINK/V2-1 boards and
                                            derivatives (STM32 discovery boards, STM32 evaluation boards, STM32 Nucleo
                                            boards). </p>
                                        <hr>
                                        <li>
                                            <a href="https://www.st.com/en/development-tools/stsw-link004.html">ST-LINK
                                                Utility - STSW-LINK004</a>
                                            <p>STM32 ST-LINK Utility (STSW-LINK004) is a full-featured software
                                                interface for programming STM32 microcontrollers. </p>
                                        </li>
                                        <hr>
                                        <li>
                                            <a href="https://www.keil.com/demo/eval/arm.htm">MDK-Arm - KEIL</a>
                                            <p>The MDK-ARM is a complete software development environment for Cortex™-M,
                                                Cortex-R4, ARM7™ and ARM9™ processor-based devices. MDK-ARM is
                                                specifically designed for microcontroller applications, it is easy to
                                                learn and use, yet powerful enough for the most demanding embedded
                                                applications. </p>
                                        </li>
                                        <hr>
                                    </ul>
                                    <h2>Reference Material</h2>
                                    <ul>
                                        <li>
                                            <video width="720" height="480px" controls>
                                                <source src="{{asset("/STM32_resources/newproject.mp4")}}" type="video/mp4">
                                            Your browser does not support the video tag.
                                            </video>
                                        </li>
                                        <li>
                                            <p>Pinout diagrams - the first step in using a particular pin on the board is to convert it from the arduino label that is given on the board to the
                                                "morpho" label on the pinout diagram.  This will then give you direction as to which bus that particular pin is on, it is important to know because
                                                the clock by default is not enabled on the individual busses to save on power.  so finding out which bus a pin belongs to is crucial to then bieng
                                                able to turn on the clock for that bus.</p>
                                            <embed style="width: 100%; height: 820px"
                                                    src="{{asset("/STM32_resources/reference_manual_1.pdf#page=33")}}"></embed>
                                        </li>
                                        <li>
                                            <p>Block Diagram - finding which bus a particular GPIO belongs to - example PA5 belongs to GPIO Port A which is on the AHB1 bus.</p>
                                            <embed style="width: 100%; height: 820px"
                                                    src="{{asset("/STM32_resources/reference_manual_2.pdf#page=16")}}"></embed>
                                        </li>
                                        <li>
                                            <p>Reference Manual<br>
                                                Page 143 - RCC_AHB1ENR enabling clock on bus 1, Bit 0 to high <br>
                                                Page 175 GPIOcx - for referencing how to address pins on the board</p>
                                            <embed style="width: 100%; height: 820px"
                                                    src="{{asset("/STM32_resources/reference_manual_3.pdf#page=175")}}"></embed>
                                        </li>
                                        <li>
                                            <p>Schematics</p>
                                            <embed style="width: 100%; height: 820px"
                                                    src="{{asset("/STM32_resources/reference_manual_4.pdf#page=63")}}"></embed>
                                        </li>
                                        <embed style="width: 100%; height: 820px"
                                                src="{{asset("/STM32_resources/writehexGPIO.pdf")}}"></embed>
                                        <li>
                                        <li>
                                            <a href="/stm32/f446re_links">Links</a></li>
                                        </li>
                                    </ul>
                                    <div id="object" style="font-size:38px;"></div>


                                    {{--@foreach($utfs as $utf)--}}
                                    {{--<p class="col-sm-1" style="font-size:20px;">{{$utf->Character}} {{$utf->HTML_Number}}</p>--}}
                                    {{--@endforeach--}}

                                </div>
                            </div>
                    </ul>
                    </li>
                </div>
            </div>
        </div>
    </div>

@endsection
