@extends('campaignfinance.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/campaign finance
        </div>
    </header>
    <div class="container-sm">
        <div class="card">
        <div class="card-header"><h3>{{$candidate->CAND_NAME}} {{$candidate->CAND_PTY_AFFILIATION}}</h3></div>
        </div>
        <div class="row" style="margin:0 20px 0 20px;">
            @foreach($committeeIDs as $committeeID)
            <div class="col-sm-3">

                    <div class="card">
                        <div class="card-header"><h3 style="color:black;">{{$committeeID->name}} | {{$committeeID->city}}, {{$committeeID->state}}, {{$committeeID->zip}}</h3>
                        <h3>last file date: {{$committeeID->last_file_date}} Treasurer name: {{$committeeID->treasurer_name}}</h3></div>
                        <div class="card-body"
                             style="">
                            @foreach($committeeID->candidate_ids as $candidate_id)
                                <a class="btn border-success text-dark" style="font-weight: bold; margin: 0 0 10px 20px; background-size: 100px 60px;"  href="/campaignfinance/pages/{{$candidate_id}}">
                                    <h3 style="font-weight: bold;">{{$candidate_id}}</h3></a>



                            @endforeach

                        </div>

                        </div>
                    </div>
            @endforeach
            </div>

        </div>

    </div>


@endsection
