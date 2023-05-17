@extends('layouts.app')

@section('title', '| Create Card')

@section('content')
    <div class="container-fluid container-margin">
        <center><h1>Welcome to The US History Card API</h1></center>
        <hr class="container-margin">
        <div class="row">
            <div class="col"></div>
            <div class="col">
                <center>
                    <form action="/cards/api/store" enctype="multipart/form-data" method="post">
                        <div class="card text-white navbar-inverse mb-3">
                            <h5 class="card-header">input Card Info</h5>
                            <div class="card-body" style="color:black;">
                                <input type="text" name="Title" placeholder="Title">
                                <input type="hidden" name="Author" placeholder="Author">
                                <input type="text" name="Subject" placeholder="Subject">
                                <input type="text" name="Year" placeholder="Year">
                                <input type="text" name="Category" placeholder="Category">
                                <input type="text" name="Cardid" placeholder="Cardid">
                                <input type="text" name="Side" placeholder="Side">
                                <input type="text" name="LKF" placeholder="LKF">
                                <input  style="color:black;" type="file" name="file[]" multiple="true">
                                <input type="submit" class="btn btn-sm  cust-btn" value="Submit Card Info">
                            </div>

                        </div>
                    </form>
                </center>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <hr class="container-margin">
@endsection