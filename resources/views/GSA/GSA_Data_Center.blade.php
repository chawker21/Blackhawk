@extends('layouts.app')

@section('content')


        <div class="container">

            <div class="card">
                <h5 class="card-header">Press Go to get Results</h5>
                <div class="card-body">
                    <h5 class="card-title">Returns GSA auction Data</h5>
                    <form action="{{route('getGSAData')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <p>Candidate ID: <input type="submit" name="candidateID" value="{{$candidate->candidate_id}}"> Click to Return Data about Candidate</p>
                    </form>
                    <p>Office Ran For: {{$candidate->office}}</p>



                </div>
            </div>

        </div>


@endsection