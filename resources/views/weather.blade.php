@extends('app.layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-3">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        <h3>Get Current Weather</h3>
                    </div>


                    <div class="card-body bg-secondary">
                        <h3 class="card-title">Enter an address or zip code:</h3>
                    <form action="{{route('weather')}}" method="post">
                        {{csrf_field()}}

                        <input type="text" name="location" style="margin: 20px 0;" class="form-control"
                               placeolder="Enter an address or zipcode"/>
                        <input type="submit" class="btn btn-primary" value="Get Weather"/>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
