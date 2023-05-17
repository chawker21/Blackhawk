
@extends('campaignfinance.layouts.app')
@section('content')
    <header>

        <div class="title">
            <a style="text-decoration:none; color:darkslategray;" href="/">Chawker21.blue</a>/campaign finance
        </div>
    </header>
    <div class="container-sm">


        <div class="row" style="margin:0 20px 2px 20px;">


            @foreach($candidates as $candidate)

                <div class="col-sm-3" style="margin:0 0 20px 0;">

                    <div class="card h-100">
                        <div class="card-header"><h3 style="color:black;">{{$candidate->CAND_NAME}}
                            </h3>@if($candidate->CAND_ICI == 'I')<h3>Incumbant</h3>
                            @elseif($candidate->CAND_ICI == 'C')<h3>Challenger</h3>
                            @elseif($candidate->CAND_ICI == 'O')<h3>Open Seat</h3>@endif
                                </h3>@if($candidate->CAND_STATUS == 'C')<h3>Present Candidate</h3>
                                @elseif($candidate->CAND_STATUS == 'F')<h3>Future Candidate</h3>
                                @elseif($candidate->CAND_STATUS == 'N')<h3>not yet a Candidate</h3>
                                @elseif($candidate->CAND_STATUS == 'P')<h3>Prior Candidate</h3>@endif
                        </div>
                        <div class="card-body"
                             style="">
                            @if($candidate->CAND_PTY_AFFILIATION == 'DEM')
                                <h3>Party: Democrat</h3>
                            @elseif($candidate->CAND_PTY_AFFILIATION == 'REP')
                                <h3>Party: Republican</h3>
                            @elseif($candidate->CAND_PTY_AFFILIATION == 'LIB')
                                <h3>Party: Libertarian</h3>
                            @elseif($candidate->CAND_PTY_AFFILIATION == 'GRE')
                                <h3>Party: Green Party</h3>
                            @elseif($candidate->CAND_PTY_AFFILIATION == 'COM')
                                <h3>Party: Communist</h3>
                            @else
                                <h3>Party: {{$candidate->CAND_PTY_AFFILIATION}}</h3>
                            @endif
                            <h3>State: {{$candidate->CAND_OFFICE_ST}} </h3>
                            @if($candidate->CAND_OFFICE_DISTRICT != 0)
                                <h3>District:{{$candidate->CAND_OFFICE_DISTRICT}} </h3>
                            @endif
                            @if($candidate->CAND_OFFICE == 'H')
                                <h3>Chamber: HOUSE</h3>
                            @elseif($candidate->CAND_OFFICE == 'S')
                                <h3>Chamber: SENATE</h3>
                            @endif
                            <h3>Office Address: {{$candidate->CAND_ST1}} {{$candidate->CAND_ST2}}, {{$candidate->CAND_CITY}}, {{$candidate->CAND_ST}}, {{$candidate->CAND_ZIP}}</h3>
                            <div class="form-group" style="color:limegreen; font-size:25px; font-weight:bold;">
                                {!! Form::open(['route' => 'campaignfinance/committees', 'class' => 'form']) !!}


                                <input type="hidden" name="candidate" style="margin: 20px 0;" class="form-control" value={{$candidate->CAND_ID}}>
                                {!! Form::submit($candidate->CAND_NAME, ['class' => 'btn btn-info']) !!}
                                {{ Form::close() }}
                            </div>
                            <a class="btn border-success text-dark btn-lg"   href="/campaignfinance/pages/{{$candidate->CAND_ID}}">
                                <h3 style="font-weight: bold;">Committees</h3></a>

                            @if(isset($candidate->committee->CMTE_ID))
                                <h3>{{$candidate->committee->CMTE_NM}}-{{$candidate->committee->FEC_ELECTION_YR}} </h3>
                                <h3>Tresurer: {{$candidate->committee->TRES_NM}} </h3>
                                <h3>{{$candidate->committee->CMTE_ST1}}</h3>
                                <h3>{{$candidate->committee->CMTE_ST2}}</h3>
                                <h3>{{$candidate->committee->CMTE_CITY}} {{$candidate->committee->CMTE_ST}}, {{$candidate->committee->CMTE_ZI}}</h3>
                                <h3></h3>
                                <h3></h3>
                                <h3>Total reciepts: {{$candidate->committee->TTL_RECEIPTS}}</h3>
                            @endif



                        </div>
                    </div>
                </div>

            @endforeach





        </div>
    </div>


@endsection

