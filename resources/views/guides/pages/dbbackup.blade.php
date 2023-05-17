@extends('/guides/layouts.app')

@section('content')
    @include('guides.partials._profile')
    @include('guides.partials.aside')
    <div class="container">
        <div class="row">
            <div class="col-md-12 ">
                <div class="panel panel-default">
                    <div class="panel-heading">Create and Event in Laravel that sends a SMS using Twilio</div>
                    <div id="test" class="panel-body">
                        <p>In this Example I will create an Event that sends a Twilio SMS message when a User enters the index page of
                            the website.</p>
                        <p>To make this work we need to install the twilio/sdk package.  In the composer.json file add</p>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">"twilio/sdk": "^5.4",</div>
                        <p>in the "require": section and then run composer update to install the package</p>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">composer update</div>
                        <p>- First we register the Events we want to create in the <i style="color:orange">EventServiceProvider.php</i>,
                            I will call this the VistedEvent with VisitedEventListener.</p>
                        <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">
                            protected $listen = [<br>
                            <p style="margin-left:40px;">'App\Events\VisitedEvent' => [</p>
                            <p style="margin-left:60px;">'App\Listeners\VisitedEventListener',</p>
                            <p style="margin-left:40px;">],</p>
                            ];<br>
                        </div>
                        <p>- After registering the Event we use Event:Generate to create the Events and Listeners that we registered,
                            this will create two new folders in the app section if they are not there already.</p>
                        <div class="alert alert-secondary border border-dark" style="font-weight:bold">php artisan event:generate</div>
                        <p>- now that we have a Listener go to <i style="color:orange">app/Listeners/VisitedEventListener.php</i> where we can create the constructor and handle the event that will use Twilio to send the
                            SMS.</p>
                        <div class="php-info alert alert-light border border-dark" style="font-weight:bold;"><?php
                            highlight_file('commandDBbackuphandle.php');
                            ?></div>

                        <p>- Finally we trigger the event in the controller where ever we want it to send the text,  I have put it in the function
                            that returns the first page a User comes to after logging in. </p>

                        <p>- First dont forget to call the Visited Event and Auth classes.</p>
                        <div class=" code-info alert alert-info border border-dark" style="font-weight:bold">use App\Events\VisitedEvent;<br>
                            use Auth;</div>

                        <p>- call the event(newVisitedEvent('', $user)); in the controller function that you want to trigger the event</p>

                        <div class=" php-info alert alert-light border border-dark" style="font-weight:bold"><?php
                            $code='<?php

    public function index(Request $request)
    {
        $user = Auth::user();

        event(new VisitedEvent("", $user));

        return view("/welcome");//
    }
                        ?>';

                            highlight_string($code);
                            ?></div>
                        <p>- Try it out, log into the page set to trigger the event and wait for a text, it should take less than 30 seconds.</p>

                    </div>
                </div>
            </div>
        </div>
@endsection