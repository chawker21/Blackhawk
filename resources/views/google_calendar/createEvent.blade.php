@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="card">
                <h5 class="card-header">Create Calendar Event</h5>
                <div class="card-body">
                    <h5 class="card-title">Create Event</h5>
                    <form action="{{route('saveEvent')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="text" name="eventname" class="form-control">
                        <input type="submit" class="btn btn-primary">
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection