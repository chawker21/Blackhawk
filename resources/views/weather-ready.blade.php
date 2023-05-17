@extends('app.layouts.app')

@section('content')
    <div class="container " style="margin-top:25px;">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                <h1>{{$address->formatted_address}}</h1>

                        <div class="card-body bg-secondary">
               <p>{{$weather->weather[0]->description}}</p>

                <ul>

                    <li>Current Temp: {{$weather->main->temp}}</li>
                    <li>Feels Like: {{$weather->main->feels_like}}</li>
                    <li>Current pressure: {{$weather->main->pressure}}</li>
                    <li>Current humidity: {{$weather->main->humidity}}</li>
                </ul>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    @endsection
