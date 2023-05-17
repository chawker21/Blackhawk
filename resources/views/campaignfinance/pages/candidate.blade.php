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
            <div class="col-sm-3" style="margin:0 0 20px 0;">

                <div class="card h-100">
                    <div class="card-header"><h3 style="color:black;">{{$candidate->CAND_NAME}} {{$candidate->CAND_PTY_AFFILIATION}}</h3></div>
                    <div class="card-body"
                         style="">
                        <h3>State: {{$candidate->CAND_OFFICE_ST}} District:{{$candidate->CAND_OFFICE_DISTRICT}} Chamber:{{$candidate->CAND_OFFICE}}</h3>
                        <h3>Office Address: {{$candidate->CAND_ST1}} {{$candidate->CAND_ST2}}, {{$candidate->CAND_CITY}}, {{$candidate->CAND_ST}}, {{$candidate->CAND_ZIP}}</h3>
                <div class="form-group" style="color:limegreen; font-size:25px; font-weight:bold;">
    {!! Form::open(['route' => 'campaignfinance/committees', 'class' => 'form']) !!}


        <input type="hidden" name="candidate" style="margin: 20px 0;" class="form-control" value={{$candidate->CAND_ID}}>
    {!! Form::submit($candidate->CAND_NAME, ['class' => 'btn btn-info']) !!}
                    {{ Form::close() }}
                </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @endsection
