<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container relative">

        <h2 class="section-title font-alt mb-70 mb-sm-40">
            Contact
        </h2>

        <div class="row mb-60 mb-xs-40">

            <div class="col-md-8 col-md-offset-2">
                <div class="row">

                    <!-- Phone -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Call Us
                            </div>
                            <div class="ci-text">
                                801 879 0769
                            </div>
                        </div>
                    </div>
                    <!-- End Phone -->

                    <!-- Address -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Address
                            </div>
                            <div class="ci-text">
                                14075 Bangerter pkwy Apt 517
                                Draper Ut, 84020
                            </div>
                        </div>
                    </div>
                    <!-- End Address -->

                    <!-- Email -->
                    <div class="col-sm-6 col-lg-4 pt-20 pb-20 pb-xs-0">
                        <div class="contact-item">
                            <div class="ci-icon">
                                <i class="fa fa-envelope"></i>
                            </div>
                            <div class="ci-title font-alt">
                                Email
                            </div>
                            <div class="ci-text">
                                <a href="mailto:madeye92@hotmail.com">Madeye92@hotmail.com</a>
                            </div>
                        </div>
                    </div>
                    <!-- End Email -->

                </div>
            </div>

        </div>

        <!-- Contact Form -->
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <div class="form-group">
                    {!! Form::open(['route' => 'rhythm.store', 'class' => 'form']) !!}
                    {!! Form::label('name', 'Your Name') !!}
                    {!! Form::text('name', null, ['class' => 'input-md round form-control', 'pattern' => '.{3,100}']) !!}
                    {!! Form::label('email', 'email') !!}
                    {!! Form::text('email', null, ['class' => 'input-md round form-control', 'pattern' => '.{5,100}']) !!}
                    {!! Form::label('message', 'message') !!}
                    {!! Form::text('message', null, ['class' => 'input-md round form-control', 'style'=>"height: 84px;"]) !!}

                    {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}
                    {!! Form::close() !!}
                </div>

                {{--<form class="form contact-form" id="contact_form">--}}
                    {{--<div class="clearfix">--}}

                        {{--<div class="cf-left-col">--}}

                            {{--<!-- Name -->--}}

                            {{--<div class="form-group">--}}
                                {{--{!! Form::open(['route' => 'rhythmstore', 'class' => 'form']) !!}--}}
                                {{--{!! Form::label('name', 'name') !!}--}}
                                {{--{!! Form::text('name', null, ['class' => 'input-md round form-control', 'pattern' => '.{3,100}']) !!}--}}
                            {{--</div>--}}
                            {{--<!-- Email -->--}}
                            {{--<div class="form-group">--}}
                                {{--{!! Form::label('email', 'email') !!}--}}
                                {{--{!! Form::text('email', null, ['class' => 'input-md round form-control', 'pattern' => '.{5,100}']) !!}--}}
                            {{--</div>--}}
                            {{----}}
                            {{--<!-- Message -->--}}
                            {{--<div class="cf-right-col">--}}
                                {{--{!! Form::label('message', 'message') !!}--}}
                                {{--{!! Form::text('message', null, ['class' => 'input-md round form-control', 'style'=>"height: 84px;"]) !!}--}}
                            {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--<div class="clearfix">--}}

                        {{--<div class="cf-left-col">--}}

                            {{--<!-- Inform Tip -->--}}
                            {{--<div class="form-tip pt-20">--}}
                                {{--<i class="fa fa-info-circle"></i> All the fields are required--}}
                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<div class="cf-right-col">--}}

                            {{--<!-- Send Button -->--}}
                            {{--<div class="align-right pt-10">--}}
                            {{----}}
                            {{--{!! Form::submit('Submit', ['class' => 'submit_btn btn btn-mod btn-medium btn-round]) !!}--}}
                            {{--{!! Form::close() !!}--}}
                        {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}



                    {{--<div id="result"></div>--}}
                {{--</form>--}}

            </div>
        </div>
        <!-- End Contact Form -->

    </div>
</section>
<!-- End Contact Section -->