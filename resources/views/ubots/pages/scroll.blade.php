@extends('ubots/layouts.app')

@section('content')
    @include('ubots.navbars.nav')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <ul class="list-group">
                        <li class="list-group-item list-group-item-primary border-dark">
                            <div class="panel-heading">Scroll to bottom of page</div>
                            <div id="test" class="panel-body">
                                <div class="alert alert-secondary border border-dark" style="font-weight:bold">
                                    <p>use run Javascript and enter the following javascript.</p>
                                    <p>window.scrollTo(0,document.body.scrollHeight);</p>
                                    <img class="" src="/ubot_resources/img/scroll.jpg"  alt="set"><br>
                                    <img class="" src="/ubot_resources/img/scroll2.jpg"  alt="set"><br>

                                    <p>Example of scrolling to bottom 5 times</p>

                                    <img class="" src="/ubot_resources/img/scroll3.jpg"  alt="set"><br>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
@endsection