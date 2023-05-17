@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Calendar Events</div>

                    <div class="card-body">
                        @foreach($events as $event)
                            <ul>
                                <li>
                                    Event: {{$event->summary}} - {{$event->status}}<br>
                                    Start: {{$event->start->dateTime}}<br>
                                    End:   {{$event->end->dateTime}}<br>
                                    Created By: {{$event->creator->displayName}}<br>
                                    Email:  {{$event->organizer->email}}<br>

                                </li>
                            </ul>
                        @endforeach

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection